<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
//use Illuminate\Database\Eloquent\Factories\HasFactory;   


class Payment extends Model
{
    //use HasFactory;

    protected $fillable = ['name', 'email', 'phone', 'amount', 'order_id', 'razorpay_payment_id', 'status'];
}
