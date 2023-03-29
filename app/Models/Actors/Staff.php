<?php

namespace App\Models\Actors;

use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


/**
 * Class Staff
 * @package App\Models\Actors
 */
class Staff extends Model implements Authenticatable
{
    protected $table = 'staffs';
    use \Illuminate\Auth\Authenticatable;
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];
    public function staff(){
        return $this->belongsTo(Admin::class);
    }
}
