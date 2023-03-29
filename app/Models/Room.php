<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Room extends Model
{
    use HasFactory;
    protected $table = 'rooms';
    /**
     * @var string[]
     */
    protected $fillable = [
      'idCategoryRoom',
      'idHotel',
      'idDiscount',
      'image',
      'roomNumber',
      'bedNumber',
      'adultNumber',
      'childNumber',
      'content',
      'price',
      'status',
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function roomcatergory(){
        return $this->belongsTo(RoomCategory::class, 'idRoom', 'id');
    }

    public function hotel(){
        return $this->belongsTo(Hotel::class, 'idHotel','id');
    }

    public function bookingDetail(){
        return $this->hasMany(BookingDetails::class);
    }

    public function discount(){
        return $this->belongsTo(Discount::class, 'idDiscount','id');
    }
    /*public function feedBack(){
        return $this->hasMany(Feedback::class);
    }*/
}
