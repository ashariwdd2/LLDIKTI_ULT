<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Carbon\carbon;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::insert([
            'name'    => 'Bayu Pamungkas Sejati',
            'email'   => 'bsejati46@gmail.com',
            'email_verified_at' => Carbon::now(),
            'password'=> \Hash::make('1221'),
            'created_at' => Carbon::now(),
        ]);
    }
}
