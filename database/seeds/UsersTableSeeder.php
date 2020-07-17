<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'Le Hoang Tu',
            'username' => 'admin',
            'email' => 'lhtu7198@gmail.com',
            'email_verified_at' => now(),
            'password' => 'admin', // password
            'remember_token' => Str::random(10),
            'avatar' => 'default.png',
            'birthday' => date('1998-01-07'),
            'gender' => true,
            'address' => 'Danang',
            'phone' => '0774455559',
            'language' => 'vi',
            'facebook' => 'fb.com/mrahn123',
            'role' => true
        ]);
    }
}
