<?php

namespace Database\Seeders;

use App\Models\RoomCategory;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Storage;

class RoomCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $categoryroom = [
            ['name'=>'Standard','image'=>Storage::url('public/images/rooms/1.jpg'),'description'=>'Basic room with no frills','quantity'=>'1-2 people','price'=>'$100'],
            ['name'=>'Standard Ocean View','image'=>Storage::url('public/images/rooms/2.jpg'),'description'=>'Basic room with ocean view','quantity'=>'1-2 people','price'=>'$200'],
            ['name'=>'Deluxe','image'=>Storage::url('public/images/rooms/3.jpg'),'description'=>'Larger room with extra amenities','quantity'=>'1-3 people','price'=>'$200'],
            ['name'=>'Deluxe Ocean View','image'=>Storage::url('public/images/rooms/4.jpg'),'description'=>'Larger room with extra amenities, ocean view','quantity'=>'1-3 people','price'=>'$300'],
            ['name'=>'Suite','image'=>Storage::url('public/images/rooms/5.jpg'),'description'=>'Spacious room with separate sitting area and luxury features','quantity'=>'1-4 people','price'=>'$400'],
            ['name'=>'Suite Ocean View','image'=>Storage::url('public/images/rooms/6.jpg'),'description'=>'Spacious room with separate sitting area and luxury features, ocean view','quantity'=>'1-4 people','price'=>'$300'],
            ['name'=>'Penthouse','image'=>Storage::url('public/images/rooms/7.jpg'),'description'=>'Luxury room with separate bedroom, private terrace, and top-tier amenities','quantity'=>'1-5 people','price'=>'$400'],
            ['name'=>'Penthouse Ocean View','image'=>Storage::url('public/images/rooms/8.jpg'),'description'=>'Luxury room with separate bedroom, private terrace, and top-tier amenities, ocean view','quantity'=>'1-5 people','price'=>'$500'],

        ];
        RoomCategory::insert($categoryroom);
    }
}
