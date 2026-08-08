<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Counsellor;
use App\GenTiming; // Your model
use App\GenDay;
use App\PriceSettings;
use App\Blog;
use App\CareerApplication;
use App\SocialPost;
use App\Payment;
use App\Quotation;
use Carbon\Carbon;
use Illuminate\Support\Facades\Storage;

class Admin extends Controller
{
    public function index(){
        $paidQuery = Payment::where('status', 1);

        $totalRevenue  = (clone $paidQuery)->sum('amount');
        $totalBookings = (clone $paidQuery)->count();

        $now = Carbon::now();

        // Bookings placed (paid) in the current calendar month
        $currentMonthBookings = (clone $paidQuery)
            ->whereYear('created_at', $now->year)
            ->whereMonth('created_at', $now->month)
            ->count();

        // Sessions scheduled in the current month (session_date is a 'dd-mm-yyyy' string)
        $thisMonthBookings = (clone $paidQuery)->pluck('session_date')->filter(function ($sd) use ($now) {
            if (empty($sd)) return false;
            try { $d = Carbon::createFromFormat('d-m-Y', $sd); } catch (\Throwable $e) { return false; }
            return $d->year === $now->year && $d->month === $now->month;
        })->count();

        // Recent confirmed bookings for the table
        $recentBookings = Payment::where('status', 1)->orderBy('id', 'desc')->take(8)->get();

        return view('Admin.home', compact(
            'totalRevenue', 'totalBookings', 'thisMonthBookings', 'currentMonthBookings', 'recentBookings'
        ));
    }

    public function addcouncelor(){
        return view('Admin.addCouncelor');
    }

    public function addBlog(){
        return view('Admin.addBlog');
    }

    public function careerApplications(){
        $applications = CareerApplication::orderBy('created_at', 'desc')->get();
        return view('Admin.careerApplications', compact('applications'));
    }

    public function downloadResume($id){
        $application = CareerApplication::findOrFail($id);
        
        // Get the file path
        $filePath = storage_path('app/public/' . $application->resume);
        
        // Check if file exists
        if (!file_exists($filePath)) {
            return redirect()->back()->with('error', 'Resume file not found.');
        }
        
        // Get the original filename
        $fileName = basename($application->resume);
        
        // Download the file
        return response()->download($filePath, $application->name . '_Resume_' . $fileName);
    }

    public function store(Request $request)
    {
        // Validate the form data
        $request->validate([
            'counsellor_name' => 'required|string|max:255',
            'counsellor_qualification' => 'required|string|max:255',
            'designation' => 'nullable|string|max:100',
            'bio' => 'nullable|string',
            'email' => 'nullable|email|max:255',
            'phone' => 'nullable|string|max:30',
            'insta_link' => 'nullable|string|max:255',
            'fb_link' => 'nullable|string|max:255',
            'twitter_link' => 'nullable|string|max:255',
            'google_link' => 'nullable|string|max:255',
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
            'designation' => $request->designation,
            'bio' => $request->bio,
            'email' => $request->email,
            'phone' => $request->phone,
            'insta_link' => $request->insta_link,
            'fb_link' => $request->fb_link,
            'twitter_link' => $request->twitter_link,
            'google_link' => $request->google_link,
            'photo' => $photoPath
        ]);

        return redirect('/admin/addcouncelor')->with('success', 'Counsellor added successfully!');
    }

    public function viewCounsellors()
    {
        $counsellors = Counsellor::orderBy('counsellor_id', 'desc')->paginate(10);
        return view('Admin.viewCounsellors', compact('counsellors'));
    }

    public function editCounsellor($id)
    {
        $counsellor = Counsellor::findOrFail($id);
        return view('Admin.editCounsellor', compact('counsellor'));
    }

    public function updateCounsellor(Request $request, $id)
    {
        $counsellor = Counsellor::findOrFail($id);

        $request->validate([
            'counsellor_name' => 'required|string|max:255',
            'counsellor_qualification' => 'required|string|max:255',
            'designation' => 'nullable|string|max:100',
            'bio' => 'nullable|string',
            'email' => 'nullable|email|max:255',
            'phone' => 'nullable|string|max:30',
            'insta_link' => 'nullable|string|max:255',
            'fb_link' => 'nullable|string|max:255',
            'twitter_link' => 'nullable|string|max:255',
            'google_link' => 'nullable|string|max:255',
            'photo' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        // Handle photo replacement
        if ($request->hasFile('photo')) {
            if ($counsellor->photo && Storage::disk('public')->exists($counsellor->photo)) {
                Storage::disk('public')->delete($counsellor->photo);
            }
            $counsellor->photo = $request->file('photo')->store('counsellors', 'public');
        }

        $counsellor->counsellor_name = $request->counsellor_name;
        $counsellor->counsellor_qualification = $request->counsellor_qualification;
        $counsellor->designation = $request->designation;
        $counsellor->bio = $request->bio;
        $counsellor->email = $request->email;
        $counsellor->phone = $request->phone;
        $counsellor->insta_link = $request->insta_link;
        $counsellor->fb_link = $request->fb_link;
        $counsellor->twitter_link = $request->twitter_link;
        $counsellor->google_link = $request->google_link;
        $counsellor->save();

        return redirect()->route('admin.viewCounsellors')->with('success', 'Counsellor updated successfully!');
    }

    public function deleteCounsellor($id)
    {
        $counsellor = Counsellor::findOrFail($id);

        // Delete the photo file if it exists
        if ($counsellor->photo && Storage::disk('public')->exists($counsellor->photo)) {
            Storage::disk('public')->delete($counsellor->photo);
        }

        // Remove related time slots & price settings to avoid orphaned records
        GenTiming::where('counsellor_id', $id)->delete();
        PriceSettings::where('councellor_id', $id)->delete();

        $counsellor->delete();

        return redirect()->route('admin.viewCounsellors')->with('success', 'Counsellor deleted successfully!');
    }

    public function bookings(Request $request)
    {
        $counsellorId = $request->input('counsellor_id'); // filter
        $counsellors  = Counsellor::orderBy('counsellor_name')->get();
        $names        = Counsellor::pluck('counsellor_name', 'counsellor_id');

        // Confirmed bookings = successful payments
        $query = Payment::where('status', 1);
        if ($counsellorId) {
            $query->where('counsellor_id', $counsellorId);
        }
        $payments = $query->orderBy('id', 'desc')->get();

        $today     = Carbon::today();
        $upcoming  = collect();
        $completed = collect();

        foreach ($payments as $p) {
            $p->counsellor_name = $names[$p->counsellor_id] ?? null;

            $date = null;
            if (!empty($p->session_date)) {
                try {
                    $date = Carbon::createFromFormat('d-m-Y', $p->session_date)->startOfDay();
                } catch (\Throwable $e) {
                    $date = null;
                }
            }

            // Upcoming = session date is today or later; everything else (incl. undated) = completed
            if ($date && $date->gte($today)) {
                $upcoming->push($p);
            } else {
                $completed->push($p);
            }
        }

        return view('Admin.bookings', compact('counsellors', 'upcoming', 'completed', 'counsellorId'));
    }

    public function quotations()
    {
        $quotations = Quotation::orderBy('id', 'desc')->paginate(15);
        return view('Admin.quotations', compact('quotations'));
    }

    public function addSocialPost()
    {
        return view('Admin.addSocialPost');
    }

    public function storeSocialPost(Request $request)
    {
        $request->validate([
            'title'    => 'required|string|max:255',
            'platform' => 'required|string|max:30',
            'link'     => 'required|url',
            'image'    => 'nullable|image|mimes:jpeg,png,jpg,gif|max:5120',
        ]);

        $imagePath = null;
        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('social_posts', 'public');
        }

        SocialPost::create([
            'title'    => $request->title,
            'platform' => $request->platform,
            'link'     => $request->link,
            'image'    => $imagePath,
        ]);

        return redirect()->route('admin.viewSocialPosts')->with('success', 'Social media post added successfully!');
    }

    public function viewSocialPosts()
    {
        $posts = SocialPost::orderBy('id', 'desc')->paginate(10);
        return view('Admin.viewSocialPosts', compact('posts'));
    }

    public function deleteSocialPost($id)
    {
        $post = SocialPost::findOrFail($id);

        if ($post->image && Storage::disk('public')->exists($post->image)) {
            Storage::disk('public')->delete($post->image);
        }

        $post->delete();

        return redirect()->route('admin.viewSocialPosts')->with('success', 'Social media post deleted successfully!');
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

        // Slots already booked (paid) for this counsellor on this date
        $bookedSlots = $this->getBookedSlots($counsellorId, $formattedDate);

        $slot = GenTiming::where('counsellor_id', $counsellorId)
                    ->where('gen_date', $formattedDate)
                    ->first();
//dd($slot);
        if ($slot) {
            $slot = $slot->toArray();
            return response()->json([
                'status' => 'success',
                'time_slots' => $slot['gen_day_time'],
                'booked_slots' => $bookedSlots
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
                    'time_slots' => $slot['gen_day_time'],
                    'booked_slots' => $bookedSlots
                ]);
            } else {
                return response()->json([
                'status' => 'not_found',
                'message' => 'No slots found for this date.'
            ]);
            }
        }
    }

    /**
     * Return an array of individual time-slot strings already booked (paid)
     * for a given counsellor on a given date.
     */
    private function getBookedSlots($counsellorId, $formattedDate)
    {
        $rows = Payment::where('counsellor_id', $counsellorId)
            ->where('session_date', $formattedDate)
            ->where('status', 1)
            ->pluck('time_slots')
            ->toArray();

        $booked = [];
        foreach ($rows as $ts) {
            foreach (explode(',', (string) $ts) as $s) {
                $s = trim($s);
                if ($s !== '') {
                    $booked[] = $s;
                }
            }
        }

        return array_values(array_unique($booked));
    }

    public function priceSettings(){
        $data['counsellors'] = Counsellor::all()->toArray();
        // Existing price settings joined with counsellor names for display
        $data['prices'] = PriceSettings::leftJoin('tbl_counsellors', 'tbl_price_settings.councellor_id', '=', 'tbl_counsellors.counsellor_id')
            ->orderBy('tbl_counsellors.counsellor_name')
            ->orderBy('tbl_price_settings.candidate_type')
            ->get(['tbl_price_settings.*', 'tbl_counsellors.counsellor_name']);
        return view('Admin.priceSettings', $data);
    }

    public function addPrice(Request $request){
        $request->validate([
            'counsellor_id'   => 'required',
            'candidate_type'  => 'required|in:Adult,Child',
            'child_age_limit' => 'required_if:candidate_type,Child|nullable|integer|min:3|max:15',
            'price'           => 'required|numeric|min:0',
        ]);

        $counsellorId  = $request->input('counsellor_id');
        $candidateType = $request->input('candidate_type');
        $price         = $request->input('price');
        // Age limit only applies to Child; store null for Adult
        $childAgeLimit = $candidateType === 'Child' ? $request->input('child_age_limit') : null;

        // One price per counsellor + candidate type; update if it already exists
        PriceSettings::updateOrCreate(
            ['councellor_id' => $counsellorId, 'candidate_type' => $candidateType],
            ['child_age_limit' => $childAgeLimit, 'price_per_hour' => $price]
        );

        return back()->with('success', 'Price setting saved successfully.');
    }

    public function getFinalAmount(Request $request){
        $counsellorId  = $request->input('counsellor_id');
        $totalHours    = $request->input('totalHours');
        $candidateType = $request->input('candidate_type', 'Adult');

        $pricePerHour = PriceSettings::where('councellor_id', $counsellorId)
            ->where('candidate_type', $candidateType)
            ->value('price_per_hour');

        $totalAmount = $pricePerHour ? $pricePerHour * $totalHours : 0;

        // Return amount + whether a price is configured for this type
        return response()->json([
            'amount'    => $totalAmount,
            'has_price' => $pricePerHour !== null,
        ]);
    }

    public function storeBlog(Request $request)
    {
        // Validate the form data
        $request->validate([
            'title' => 'required|string|max:255',
            'post_date' => 'required|date',
            'workplace' => 'required|string|max:255',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:5120',
            'display_text' => 'required|string',
            'content' => 'required|string',
            'slug' => 'nullable|string|max:255|unique:blogs,slug',
        ]);

        // Handle File Upload
        $imagePath = null;
        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('blogs', 'public');
        }

        // Generate slug if not provided
        $slug = $request->slug;
        if (empty($slug)) {
            $slug = \Str::slug($request->title);
            
            // Ensure uniqueness
            $originalSlug = $slug;
            $count = 1;
            while (Blog::where('slug', $slug)->exists()) {
                $slug = $originalSlug . '-' . $count;
                $count++;
            }
        }

        // Insert data into the database
        Blog::create([
            'title' => $request->title,
            'post_date' => $request->post_date,
            'workplace' => $request->workplace,
            'image' => $imagePath,
            'display_text' => $request->display_text,
            'content' => $request->content,
            'slug' => $slug,
        ]);

        return redirect('/admin/addBlog')->with('success', 'Blog post added successfully!');
    }

    
public function viewBlogs()
    {
        $blogs = Blog::orderBy('created_at', 'desc')->paginate(10);
        return view('Admin.viewBlogs', compact('blogs'));
    }

    public function editBlog($id)
    {
        $blog = Blog::findOrFail($id);
        return view('Admin.editBlog', compact('blog'));
    }

    public function updateBlog(Request $request, $id)
    {
        $blog = Blog::findOrFail($id);

        // Validate the form data
        $request->validate([
            'title' => 'required|string|max:255',
            'post_date' => 'required|date',
            'workplace' => 'required|string|max:255',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:5120',
            'display_text' => 'required|string',
            'content' => 'required|string',
            'slug' => 'required|string|max:255|unique:blogs,slug,' . $id,
        ]);

        // Handle File Upload
        if ($request->hasFile('image')) {
            // Delete old image if exists
            if ($blog->image && Storage::disk('public')->exists($blog->image)) {
                Storage::disk('public')->delete($blog->image);
            }
            $imagePath = $request->file('image')->store('blogs', 'public');
            $blog->image = $imagePath;
        }

        // Update blog data
        $blog->title = $request->title;
        $blog->post_date = $request->post_date;
        $blog->workplace = $request->workplace;
        $blog->display_text = $request->display_text;
        $blog->content = $request->content;
        $blog->slug = $request->slug;
        $blog->save();

        return redirect()->route('admin.viewBlogs')->with('success', 'Blog post updated successfully!');
    }

    public function deleteBlog($id)
    {
        $blog = Blog::findOrFail($id);

        // Delete the image file if exists
        if ($blog->image && Storage::disk('public')->exists($blog->image)) {
            Storage::disk('public')->delete($blog->image);
        }

        // Delete the blog post
        $blog->delete();

        return redirect()->route('admin.viewBlogs')->with('success', 'Blog post deleted successfully!');
    }

}

