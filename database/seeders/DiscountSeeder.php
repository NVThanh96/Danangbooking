<?php

namespace Database\Seeders;

use App\Models\Discount;
use Illuminate\Database\Seeder;

class DiscountSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $discount = [
            ['type'=>'%','discount'=>'5'],
            ['type'=>'%','discount'=>'10'],
            ['type'=>'%','discount'=>'15'],
            ['type'=>'%','discount'=>'20'],
            ['type'=>'%','discount'=>'25'],
            ['type'=>'%','discount'=>'30'],
            ['type'=>'%','discount'=>'35'],
            ['type'=>'$','discount'=>'20'],
            ['type'=>'$','discount'=>'20'],
            ['type'=>'$','discount'=>'50'],
            ['type'=>'$','discount'=>'90'],
            ['type'=>'$','discount'=>'100'],
            ['type'=>'$','discount'=>'130'],
            ['type'=>'$','discount'=>'160'],
            ['type'=>'$','discount'=>'200'],
            ['type'=>'$','discount'=>'250'],
        ];
        Discount::insert($discount);
    }
}
