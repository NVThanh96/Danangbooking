<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    use HasFactory;

    /**
     * @var string
     */
    protected $table = 'payments';

    /**
     * @var string[]
     */
    protected $fillable = [
        'idBooking',
        'Amount',
        'date',
        'method',
    ];
    /**
     * @return BelongsTo
     */
    public function booking(){
        return $this->belongsTo(Booking::class);
    }

}
