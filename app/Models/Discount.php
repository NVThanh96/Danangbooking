<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Discount extends Model
{
    use HasFactory;

    /**
     * @var string
     */
    protected $table = 'discounts';

    /**
     * @var string[]
     */
    protected $fillable = [
        'type', 
        'discount',
        'start',
        'end',
    ];

    public function rooms()
    {
        return $this->hasMany(Room::class);
    }
}
