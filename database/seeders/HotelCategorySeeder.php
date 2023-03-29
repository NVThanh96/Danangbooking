<?php

namespace Database\Seeders;

use App\Models\HotelCategory;
use Illuminate\Database\Seeder;

class HotelCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $hotelcategory = [
            ['name'=>'Budget hotels','description'=>'Hotels designed to be affordable and basic, providing a no-frills experience. They often offer limited amenities and services, but provide comfortable and clean accommodations at a lower price point.','price'=>'$50 - $150 per nigh'],
            ['name'=>'Extended-stay hotels','description'=>'Hotels designed for longer stays and typically include amenities like kitchenettes, laundry facilities, and larger living spaces.','price'=>'$80 - $200 per night'],
            ['name'=>'Business hotels','description'=>'Hotels located in business districts that offer services and amenities tailored to business travelers, such as meeting rooms, high-speed internet, and business centers.','price'=>'$100 - $300 per night'],
            ['name'=>'Boutique hotels','description'=>'Smaller, intimate hotels that focus on unique and stylish design, personalized service, and often located in trendy or unique locations.','price'=>'$100 - $400 per night'],
            ['name'=>'Eco-friendly hotels','description'=>'Hotels that prioritize sustainability and often have features such as energy-efficient appliances, eco-friendly cleaning products, and recycling programs.','price'=>'$100 - $400 per night'],
            ['name'=>'Resort hotels','description'=>'Hotels often located in scenic locations, offering a wide range of amenities and activities, including golf courses, water sports, and other recreational activities.','price'=>'$150 - $500+ per night'],
            ['name'=>'Luxury hotels','description'=>'Upscale hotels that provide the highest level of service and amenities, often targeted at high-end travelers. They often feature amenities like spas, fine dining restaurants, and high-quality room furnishings.','price'=>'$300 - $1000+ per night'],
        ];
        HotelCategory::insert($hotelcategory);
    }
}
