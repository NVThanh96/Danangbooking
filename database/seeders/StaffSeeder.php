<?php

namespace Database\Seeders;

use App\Models\Actors\Staff;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class StaffSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $staffs = [
            ['name' => 'Thang','idAdmin'=>'1', 'email' => 'toilatoi1996vn@gmail.com', 'birthday' => '1999-02-02', 'password' => Hash::make('123123123'), 'remember_token' => ' ', 'created_at' => date('Y-m-d H:i:s')],
            ['name' => 'user1','idAdmin'=>'1', 'email' => 'staff1@gmail.com', 'birthday' => '1999-09-02', 'password' => Hash::make('123123123'), 'remember_token' => ' ', 'created_at' => date('Y-m-d H:i:s')],
        ];
        Staff::insert($staffs);
    }
}
