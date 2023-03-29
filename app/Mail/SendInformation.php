<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class SendInformation extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($transaction,$bookingDetail, $booking, $room)
    {
        $this->transaction = $transaction;
        $this->bookingDetail = $bookingDetail;
        $this->booking = $booking;
        $this->room = $room;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('views.booking.sendInformation', [
                'transaction' => $this->transaction,
                'bookingDetail' => $this->bookingDetail,
                'booking' => $this->booking,
                'room' => $this->room,
            ]
        );
    }
}
