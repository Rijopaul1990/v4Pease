<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
//use Illuminate\Database\Eloquent\Factories\HasFactory;   


class Payment extends Model
{
    //use HasFactory;

    protected $fillable = [
        'name', 'email', 'phone', 'amount', 'order_id', 'razorpay_payment_id', 'status', 'remark',
        'counsellor_id', 'candidate_type', 'session_mode', 'session_date', 'time_slots', 'total_hour',
    ];
}
