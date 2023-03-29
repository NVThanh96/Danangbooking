<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FeedBack extends Model
{
    use HasFactory;

    /**
     * @var string
     */
    protected $table = 'feedBack';

    /**
     * @var string[]
     */
    protected $fillable =[
        'idHotel',
        'idRoom',
        'idService',
        'first_name',
        'last_name',
        'phone',
        'email',
        'title',
        'content',
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function feedBackCategories(){
        return $this->belongsTo(FeedBackCategory::class,'idCategoryFeedBack','id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function room(){
        return $this->belongsTo(Room::class,'idRoom','id');
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

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function customer(){
        return $this->belongsTo(Customer::class,'idCustomer','id');
    }
}
