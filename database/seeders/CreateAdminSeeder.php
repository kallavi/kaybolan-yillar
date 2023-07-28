<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class CreateAdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        \DB::table('users')->insert([
            'name' => 'Admin',
            'email' => 'admin@kaybolanyillar.com',
            'password' => \Hash::make('kaybolanyillar!159'),
            'remember_token' => Str::random(10),
            'email_verified_at' => now(),
        ]);
    }
}
