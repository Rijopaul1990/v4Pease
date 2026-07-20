<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use App\Timing;
use App\Counsellor;
use App\PriceSettings;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function index(){
        $timings = Timing::all()->toArray();
        $data['counsellors'] = Counsellor::all()->toArray();
        $data['timings'] = $timings;

        // Map of counsellor_id => child age limit (for the "up to X yrs" note on the booking form)
        $data['childAgeLimits'] = PriceSettings::where('candidate_type', 'Child')
            ->pluck('child_age_limit', 'councellor_id')
            ->toArray();

        return view('slotBooking', $data);
    }

    public function saveBookingData(Request $request){
        dd($request->post());
    }

}


