<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HotelCategory extends Model
{
    use HasFactory;

    /**
     * @var string
     */
    protected $table = 'hotelCategories';

    /**
     * @var string[]
     */
    protected $fillable =[
        'name',
        'description',
        'price'
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function hotel(){
        return $this->hasMany(Hotel::class);
    }
}
