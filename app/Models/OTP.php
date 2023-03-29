<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OTP extends Model
{
    use HasFactory;

    protected $table = 'otps';

    protected $fillable = [
        'code',
        'code_expired',
        'idCustomer'
    ];

    public function customer(){
        return $this->hasMany(Customer::class);
    }
}
