<?php

namespace Database\Seeders;

use App\Models\Actors\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = [
            ['name' => 'Thang', 'email' => 'thanh1996vn@gmail.com', 'birthday' => '1999-02-02', 'password' => Hash::make('123123123'), 'remember_token' => ' ', 'created_at' => date('Y-m-d H:i:s')],
            ['name' => 'user1', 'email' => 'user1@gmail.com', 'birthday' => '1999-07-12', 'password' => Hash::make('123123123'), 'remember_token' => ' ', 'created_at' => date('Y-m-d H:i:s')],
            ['name' => 'user2', 'email' => 'user2@gmail.com', 'birthday' => '1998-03-31', 'password' => Hash::make('123123123'), 'remember_token' => ' ', 'created_at' => date('Y-m-d H:i:s')],
            ['name' => 'user3', 'email' => 'user3@gmail.com', 'birthday' => '1997-05-10', 'password' => Hash::make('123123123'), 'remember_token' => ' ', 'created_at' => date('Y-m-d H:i:s')],
            ['name' => 'user4', 'email' => 'user4@gmail.com', 'birthday' => '1996-01-18', 'password' => Hash::make('123123123'), 'remember_token' => ' ', 'created_at' => date('Y-m-d H:i:s')],
            ['name' => 'user5', 'email' => 'user5@gmail.com', 'birthday' => '1995-04-14', 'password' => Hash::make('123123123'), 'remember_token' => ' ', 'created_at' => date('Y-m-d H:i:s')],
            ['name' => 'user6', 'email' => 'user6@gmail.com', 'birthday' => '1994-08-13', 'password' => Hash::make('123123123'), 'remember_token' => ' ', 'created_at' => date('Y-m-d H:i:s')],
            ['name' => 'user7', 'email' => 'user7@gmail.com', 'birthday' => '1993-09-19', 'password' => Hash::make('123123123'), 'remember_token' => ' ', 'created_at' => date('Y-m-d H:i:s')],
            ['name' => 'user8', 'email' => 'user8@gmail.com', 'birthday' => '1992-06-06', 'password' => Hash::make('123123123'), 'remember_token' => ' ', 'created_at' => date('Y-m-d H:i:s')],
        ];
        User::insert($user);
    }
}
