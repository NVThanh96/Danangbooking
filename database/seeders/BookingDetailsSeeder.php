<?php

namespace Database\Seeders;

use App\Models\BookingDetails;
use Illuminate\Database\Seeder;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
use App\Models\Hotel;
use App\Models\Room;
use App\Models\Service;

class BookingDetailsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $hotels = Hotel::all();
        $rooms = Room::all();
        $services = Service::all();

        for ($i = 1; $i <= 10; $i++) {

            $hotel = $hotels->random();
            $room = $rooms->where('hotel_id', $hotel->id)->random();
            $service = $services->where('hotel_id', $hotel->id)->random();

            $datecheckin = Carbon::createFromTimestamp(mt_rand(0, time())); // Random date
            $datedays = rand(1, 7); // Random number of days for stay
            $datecheckout = clone $datecheckin; // Clone check-in date
            $datecheckout->addDays($datedays); // Add random number of days for stay

            DB::table('bookingDetails')->insert([
                'idBooking' => rand(1,10),
                'idHotel' => rand(1,20),
                'idRoom' => rand(1,20),
                'idService' => $service,
                'checkin' => $datecheckin->toDateString(),
                'checkout' => $datecheckout->toDateString(),
                'total' => rand(100,999),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]);
        }
    }
}
