<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Counsellor;
use App\GenTiming; // Your model
use App\GenDay;
use App\PriceSettings;
use Carbon\Carbon;

class Admin extends Controller
{
    public function index(){
        return view('Admin.home');
    }

    public function addcouncelor(){
        return view('Admin.addCouncelor');
    }

    public function store(Request $request)
    {
        // Validate the form data
        $request->validate([
            'counsellor_name' => 'required|string|max:255',
            'counsellor_qualification' => 'required|string|max:255',
            'insta_link' => 'nullable|url',
            'fb_link' => 'nullable|url',
            'twitter_link' => 'nullable|url',
            'photo' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048'
        ]);

        // Handle File Upload
        $photoPath = null;
        if ($request->hasFile('photo')) {
            $photoPath = $request->file('photo')->store('counsellors', 'public');
        }

        // Insert data into the database
        Counsellor::create([
            'counsellor_name' => $request->counsellor_name,
            'counsellor_qualification' => $request->counsellor_qualification,
            'insta_link' => $request->insta_link,
            'fb_link' => $request->fb_link,
            'twitter_link' => $request->twitter_link,
            'photo' => $photoPath
        ]);

        return redirect('/admin/addcouncelor')->with('success', 'Counsellor added successfully!');
    }

    public function addTime(){
        $data['counsellors'] = Counsellor::all()->toArray();
        $data['genDays'] = GenDay::all()->toArray();
        //dd($data['genDays'] );
        return view('Admin.addTime', $data);
    }

    public function storeTime(Request $request)
{
    $counsellorId = $request->input('counsellor');
    $interval     = (int) $request->input('interval');
    $dateType     = $request->input('date_type'); // 'weekly' or 'specific'
    $genDate      = ($dateType === 'specific') ? $request->input('date') : 0;
    $genDays      = $request->input('days', []); // for weekly

    // Time slot generator function
    $generateSlots = function ($start, $start_ampm, $end, $end_ampm) use ($interval) {
        if (!$start || !$end) return [];

        $startTime = Carbon::createFromFormat('h:i A', "$start $start_ampm");
        $endTime   = Carbon::createFromFormat('h:i A', "$end $end_ampm");

        $slots = [];
        while ($startTime->lt($endTime)) {
            $slotStart = $startTime->copy();
            $slotEnd   = $startTime->copy()->addMinutes($interval);
            if ($slotEnd->gt($endTime)) break;

            $slots[] = $slotStart->format('h:i A') . ' - ' . $slotEnd->format('h:i A');
            $startTime = $slotEnd;
        }
        return $slots;
    };

    // Generate slots for both sessions
    $firstSessionSlots = $generateSlots(
        $request->input('first_start_time'),
        $request->input('first_start_ampm'),
        $request->input('first_end_time'),
        $request->input('first_end_ampm')
    );

    $secondSessionSlots = $generateSlots(
        $request->input('second_start_time'),
        $request->input('second_start_ampm'),
        $request->input('second_end_time'),
        $request->input('second_end_ampm')
    );

    $allSlots = array_merge($firstSessionSlots, $secondSessionSlots);
    $timeSlotString = implode(', ', $allSlots);

    // Handle Specific Date
    if ($dateType === 'specific' && $genDate) {
        GenTiming::updateOrCreate(
            [
                'counsellor_id' => $counsellorId,
                'gen_date'      => $genDate,
            ],
            [
                'gen_day_id'    => 0,
                'gen_day_time'  => $timeSlotString,
            ]
        );
    }

    // Handle General Weekly Days with gen_date = 0
    if ($dateType === 'general' && !empty($genDays)) {
        foreach ($genDays as $genDayId) {
            GenTiming::updateOrCreate(
                [
                    'counsellor_id' => $counsellorId,
                    'gen_day_id'    => $genDayId,
                    'gen_date'      => 0,
                ],
                [
                    'gen_day_time' => $timeSlotString,
                ]
            );
        }
    }

    return back()->with('success', 'Time slots saved successfully.');
}
public function getTimeSlots(Request $request)
    {
        $counsellorId = $request->input('counsellor_id');
        $selDate      = $request->input('date'); // format: dd-mm-yy
        //dd($counsellorId); 
        
        
        $carbonDate = \Carbon\Carbon::createFromFormat('d-m-Y', $selDate);
        $formattedDate = $carbonDate->format('d-m-Y'); // This is just a string
        $dayName = $carbonDate->format('D'); 
        


        $slot = GenTiming::where('counsellor_id', $counsellorId)
                    ->where('gen_date', $formattedDate)
                    ->first();
//dd($slot);
        if ($slot) {
            $slot = $slot->toArray();
            return response()->json([
                'status' => 'success',
                'time_slots' => $slot['gen_day_time']
            ]);
        } else {
            $dayId = GenDay::where('gen_day_name', $dayName)
                     ->first();
            $dayId = $dayId->toArray();
            //print_r($dayId['gen_day_id']); exit;
            $slot = GenTiming::where('counsellor_id', $counsellorId)
                    ->where('gen_day_id', $dayId['gen_day_id'])
                    ->first();
            $slot = $slot->toArray();
            //print_r($slot);
            if($slot){
                return response()->json([
                    'status' => 'success',
                    'time_slots' => $slot['gen_day_time']
                ]);
            } else {
                return response()->json([
                'status' => 'not_found',
                'message' => 'No slots found for this date.'
            ]);
            }
        }
    }

    public function priceSettings(){
        $data['counsellors'] = Counsellor::all()->toArray();
        return view('Admin.priceSettings', $data);
    }

    public function addPrice(Request $request){
        // $request->validate([
        // 'counsellor_id' => 'required|exists:councellor_id',
        // 'price' => 'required|numeric|min:0',
        // ]);

        $counsellorId = $request->input('counsellor_id');
        $interval     = $request->input('price');

        // Use updateOrInsert to update if exists, insert if not
        PriceSettings::updateOrCreate(
            ['councellor_id' => $counsellorId],
            ['price_per_hour' => $interval, 'updated_at' => now()]
        );

        return back()->with('success', 'Price setting saved successfully.');
    }

    public function getFinalAmount(Request $request){
        $counsellorId = $request->input('counsellor_id');
        $selDate      = $request->input('totalHours');
        $pricePerHour = PriceSettings::where('councellor_id', $counsellorId)->value('price_per_hour');

        $totalAmount = $pricePerHour ? $pricePerHour * $selDate  : 0;

        return $totalAmount;
    }

    

}
