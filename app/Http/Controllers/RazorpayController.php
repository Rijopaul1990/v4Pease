<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Razorpay\Api\Api;
use App\Payment;
use App\Counsellor;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Log;

class RazorpayController extends Controller
{
    public function payment(Request $request)
    {
        
        $request->validate([
            'name' => 'required|string',
            'email' => 'required|email',
            'phone' => 'required',
            'amount' => 'required|numeric|min:1',
        ]);

        $api = new Api(env('RAZORPAY_KEY'), env('RAZORPAY_SECRET'));
//dd($api);
        $order = $api->order->create([
            'receipt' => 'order_' . uniqid(),
            'amount' => $request->amount * 100, // Convert to paise
            'currency' => 'USD',
            'payment_capture' => 1
        ]);

        $payment = Payment::create([
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'amount' => $request->amount,
            'order_id' => $order['id'],
            'remark' => $request->remark ?? '',
            'status' => 0,
            // Session details (for the receipt/voucher)
            'counsellor_id'  => $request->counsellor_id ?: null,
            'candidate_type' => $request->candidate_type,
            'session_mode'   => $request->session_mode,
            'session_date'   => $request->session_date,
            'time_slots'     => $request->time_slots,
            'total_hour'     => $request->total_hour ?? $request->totalHour,
        ]);

        return view('payment', [
            'orderId' => $order['id'],
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'amount' => $request->amount,
            'razorpayKey' => env('RAZORPAY_KEY'),
        ]);
    }

    public function success(Request $request)
    {
        if (!$request->razorpay_payment_id || !$request->razorpay_order_id) {
            return back()->with('error', 'Payment failed. Please try again.');
        }

        $payment = Payment::where('order_id', $request->razorpay_order_id)->first();

        if (!$payment) {
            return back()->with('error', 'Invalid payment record.');
        }

        $payment->update([
            'razorpay_payment_id' => $request->razorpay_payment_id,
            'status' => 1 // Mark as successful
        ]);

        // Resolve counsellor (for the voucher + email)
        $counsellorName = null;
        $counsellorEmail = null;
        if ($payment->counsellor_id) {
            $counsellor = Counsellor::where('counsellor_id', $payment->counsellor_id)->first();
            if ($counsellor) {
                $counsellorName  = $counsellor->counsellor_name;
                $counsellorEmail = $counsellor->email;
            }
        }

        // Send confirmation emails to the customer and the counsellor.
        // Wrapped so a mail failure never breaks the success page.
        try {
            $fromAddress = config('mail.from.address') ?: 'v4peacecounselling@gmail.com';
            $fromName    = config('mail.from.name') ?: 'V4Peace Counselling Centre';

            $baseData = [
                'payment'        => $payment,
                'counsellorName' => $counsellorName,
                'paymentId'      => $request->razorpay_payment_id,
            ];

            // Customer
            if (!empty($payment->email)) {
                Mail::send('emails.booking-confirmation', array_merge($baseData, ['forCounsellor' => false]),
                    function ($mail) use ($payment, $fromAddress, $fromName) {
                        $mail->from($fromAddress, $fromName)
                             ->to($payment->email, $payment->name)
                             ->subject('Your Counselling Session is Confirmed — V4Peace');
                    });
            }

            // Counsellor
            if (!empty($counsellorEmail)) {
                Mail::send('emails.booking-confirmation', array_merge($baseData, ['forCounsellor' => true]),
                    function ($mail) use ($counsellorEmail, $counsellorName, $fromAddress, $fromName) {
                        $mail->from($fromAddress, $fromName)
                             ->to($counsellorEmail, $counsellorName)
                             ->subject('New Booking Received — V4Peace');
                    });
            }
        } catch (\Exception $e) {
            Log::error('Booking confirmation email failed', [
                'error'    => $e->getMessage(),
                'order_id' => $payment->order_id,
            ]);
        }

        return view('success', [
            'payment'        => $payment,
            'paymentId'      => $request->razorpay_payment_id,
            'counsellorName' => $counsellorName,
        ]);
        // return redirect('/razorpay')->with([
        //     'success' => 'Payment Successful!',
        //     'payment' => $payment
        // ]);
    }
}
