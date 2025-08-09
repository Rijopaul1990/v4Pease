<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use App\Timing;
use App\Counsellor;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function index(){
        $timings = Timing::all()->toArray();
        $data['counsellors'] = Counsellor::all()->toArray();
        $data['timings'] = $timings;

        return view('slotBooking', $data);
    }

    

}


