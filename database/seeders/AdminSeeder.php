<?php

namespace Database\Seeders;

use App\Models\Actors\Admin;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $admins = [
            ['name' => 'Thanh', 'email' => 'toilatoi8624@gmail.com', 'birthday' => '1999-02-02', 'password' => Hash::make('123123123'), 'remember_token' => ' ', 'created_at' => date('Y-m-d H:i:s')],
            ['name' => 'admin1', 'email' => 'admin1@gmail.com', 'birthday' => '1999-02-02', 'password' => Hash::make('123123123'), 'remember_token' => ' ', 'created_at' => date('Y-m-d H:i:s')],
            ['name' => 'admin2', 'email' => 'admin2@gmail.com', 'birthday' => '1999-02-02', 'password' => Hash::make('123123123'), 'remember_token' => ' ', 'created_at' => date('Y-m-d H:i:s')],
            ['name' => 'admin3', 'email' => 'admin3@gmail.com', 'birthday' => '1999-02-02', 'password' => Hash::make('123123123'), 'remember_token' => ' ', 'created_at' => date('Y-m-d H:i:s')],
        ];
        Admin::insert($admins);
    }
}
