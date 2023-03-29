<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * Class RoomCategory
 * @package App\Models
 */
class RoomCategory extends Model
{
    use HasFactory;

    /**
     * @var string
     */
    protected  $table = 'roomCategories';

    /**
     * @var string[]
     */
    protected $fillable = [
        'name',
        'image',
        'description',
        'quantity',
        'price'
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function room(){
        return $this->hasMany(Room::class);
    }
}
