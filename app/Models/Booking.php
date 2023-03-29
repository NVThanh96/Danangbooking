<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    use HasFactory;

    /**
     * @var string
     */
    protected $table = 'bookings';

    /**
     * @var string[]
     */
    protected $fillable = [
        'idCustomer',
        'date',
        'time',
    ];
    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function customer()
    {
        return $this->belongsTo(Customer::class);
    }
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function bookingDetail()
    {
        return $this->hasMany(BookingDetails::class);
    }



}
