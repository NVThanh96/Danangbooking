<?php

namespace Database\Seeders;

use App\Models\ServiceCategory;
use Illuminate\Database\Seeder;

class ServiceCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $servicecategory = [
            ['name'=>'Accommodation','description'=> 'Housekeeping, Room Service, Wake-up Calls, Laundry, Turndown Service'],
            ['name'=>'Food and Beverage','description'=> 'Restaurants, Bars, Room Service, Catering, Breakfast buffet'],
            ['name'=>'Font Desk and Concierge','description'=> 'Check-in/Check-out, Luggage Storage, Travel Arrangements, Valet Parking, Shuttle Service'],
            ['name'=>'Business and Event','description'=> 'Meeting Rooms, Audio-Visual Equipment, Event Planning, Catering, Business Center'],
            ['name'=>'Health and Wellness','description'=> 'Fitness Center, Spa, Sauna, Swimming Pool, Beauty Salon'],
            ['name'=>'Transportation','description'=> 'Airport Shuttle, Car Rentals, Valet Parking, Taxi Service, Bike Rental'],
            ['name'=>'Entertainment','description'=> 'Game Room, Sports Facilities, In-Room Entertainment, Live Music, Nightclub'],
            ['name'=>'Safety and Security','description'=> '24-hour Security, Emergency Services, In-Room Safes, Smoke Detectors, CCTV'],
        ];
        ServiceCategory::insert($servicecategory);
    }
}
