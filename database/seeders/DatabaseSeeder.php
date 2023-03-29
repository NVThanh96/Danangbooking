<?php

namespace Database\Seeders;


use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(UserSeeder::class);
        $this->call(AdminSeeder::class);
        $this->call(StaffSeeder::class);

        $this->call(DiscountSeeder::class);
        $this->call(RoomSeeder::class);
        $this->call(ServiceSeeder::class);
        $this->call(HotelSeeder::class);
        $this->call(HotelCategorySeeder::class);
        $this->call(RoomCategorySeeder::class);
        $this->call(ServiceCategorySeeder::class);
        $this->call(BookingSeeder::class);
        /*$this->call(BookingDetailsSeeder::class);*/
    }
}
