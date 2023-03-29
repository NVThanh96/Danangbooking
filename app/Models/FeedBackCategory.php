<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FeedBackCategory extends Model
{
    use HasFactory;

    /**
     * @var string
     */
    protected $table = 'feedBackCategories';

    /**
     * @var string[]
     */
    protected $fillable =[
        'type',
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function feedBack(){
        return $this->hasMany(FeedBack::class);
    }
}
