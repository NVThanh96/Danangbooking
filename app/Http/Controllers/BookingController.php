<?php

namespace App\Http\Controllers;

use App\Http\Requests\SendMail;
use App\Mail\OTPVerification;
use App\Mail\SendInformation;
use App\Models\Booking;
use App\Models\BookingDetails;
use App\Models\Customer;
use App\Models\OTP;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;

class BookingController extends Controller
{
    public function SendMail(SendMail $request)
    {
        DB::beginTransaction();
        try {
            // Check if the customer already exists
            $customer = Customer::where('email', $request['email'])->first();

            if (empty($customer)) {
                $customer = new Customer();
                $bookingDetail = new BookingDetails();
                // Save customer data to database
                $transaction = [
                    $customer->last_name = $request['last_name'],
                    $customer->first_name = $request['first_name'],
                    $customer->email = $request['email'],
                    $customer->phone = $request['phone'],
                    $customer->save(),
                ];
                session()->put('transaction', $transaction);

                $transactionBookingDetail = [
                    $bookingDetail->checkin = $request['checkin'],
                    $bookingDetail->checkout = $request['checkout'],
                ];
                session()->put('transactionBookingDetail', $transactionBookingDetail);

                $otp = rand(100000, 999999);

                $transactionOtp = OTP::create([
                    'code' => $otp,
                    'code_expired' => Carbon::now()->addSecond(60),
                    'idCustomer' => $customer->id,
                ]);

                session(['transactionOtp' => $transactionOtp]);
            }

            Mail::to($request['email'])->send(new OTPVerification($customer, $otp));
            DB::commit();
            // Show OTP verification form
            return view('views.booking.verify-otp1', compact('customer'));
        } catch (\Exception $e) {
            DB::rollBack();
            throw new \Exception($e->getMessage());
        }

    }

    public function VerifyMail(Request $request)
    {
        try {
            if (!session()->has('transactionOtp')) {
                return redirect()->route('send-mail');
            }
            $transactionOtp = session('transactionOtp');
            $transactionBookingDetail = session('transactionBookingDetail');

            $room = session('room');
            $transaction = session('transaction');

            /*$discount = 0;*/
            $discount = optional($room->discount)->type == '%' ? $room->price * ($room->discount->discount) / 100 : $room->discount->discount;
            $priceHaveDiscount = $room->price - $discount;


            $booking = new Booking();
            $booking->idCustomer = $transactionOtp->idCustomer;
            $booking->date = Carbon::now()->format('Y/m/d');
            $booking->time = Carbon::now()->format('H:i:s');
            $booking->save();


            $bookingDetail = new BookingDetails();
            $bookingDetail->idBooking = $booking->id;
            $bookingDetail->idHotel = $room->idHotel;
            $bookingDetail->idRoom = $room->id;
            $bookingDetail->total = $priceHaveDiscount;
            $bookingDetail->checkin = $transactionBookingDetail[0];
            $bookingDetail->checkout = $transactionBookingDetail[1];
            $bookingDetail->save();

            $customer = Customer::get();

            $validatedData = $request->validate([
                'otp' => 'required|numeric',
            ]);

            $otp = $validatedData['otp'];

            if ($transactionOtp->code == $otp) {
                $room->status = 0;
                $room->save();
                Mail::to($transaction[2])->send(new SendInformation($transaction,$bookingDetail, $booking, $room));
                return redirect()->route('index');
            }
        } catch (\Exception $e) {
            throw new \Exception($e->getMessage());
        }
    }
}
