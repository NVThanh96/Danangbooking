<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    use HasFactory;
    protected $table = 'services';

    /**
     * @var string[]
     */
    protected $fillable = [
        'idCategoryHotel',
        'idHotel',
        'image',
        'name',
        'address',
        'quantity',
        'price',
        'status',
    ];
    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function servicecatergory(){
        return $this->belongsTo(ServiceCategory::class);
    }

    public function hotel(){
        return $this->belongsTo(Hotel::class);
    }
    /*public function bookingDetail(){
        return $this->hasMany(BookingDetails::class);
    }
    public function feedBack(){
        return $this->hasMany(Feedback::class);
    }*/
}
