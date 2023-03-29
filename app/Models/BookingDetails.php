<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BookingDetails extends Model
{
    use HasFactory;

    /**
     * @var string
     */
    protected $table = 'bookingDetails';

    /**
     * @var string[]
     */
    protected $fillable = [
        'idBooking',
        'idHotel',
        'idRoom',
        'idService',
        'checkin',
        'checkout',
        'total',
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function booking(){
        return $this->belongsTo(Booking::class,'idBooking','id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function room(){
        return $this->belongsTo(Room::class);
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function service(){
        return $this->belongsTo(Service::class,'idService','id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function hotel(){
        return $this->belongsTo(Hotel::class,'idHotel','id');
    }


}
