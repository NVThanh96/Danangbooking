<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

/**
 * Class Hotel
 * @package App\Models
 */
class Hotel extends Model
{
    use HasFactory;

    /**
     * @var string
     */
    protected $table = 'hotels';

    /**
     * @var string[]
     */
    protected $fillable = [
        'idCategoryHotel',
        'image',
        'name',
        'location',
        'address',
        'description',
        'rate',
    ];

    /**
     * @return BelongsTo
     */
    public function hotelCategories(){
        return $this->belongsTo(HotelCategory::class);
    }

    /**
     * @return HasMany
     */
    public function room(){
        return $this->hasMany(Room::class);
    }

    /**
     * @return HasMany
     */
    public function service(){
        return $this->hasMany(Service::class);
    }/**
     * @return HasMany
     */
    public function bookingdetails(){
        return $this->hasMany(BookingDetails::class, 'idHotel');
    }
    /**
     * @return HasMany
     */
   /* public function feedback(){
        return $this->hasMany(FeedBack::class);
    }*/
}
