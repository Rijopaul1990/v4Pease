<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BookingController
{
    public function saveBookingData(Request $request)
    {
        //dd($request->post());
        $data['formData'] = $request->post();
        return view('checkout', $data);
    }
}
