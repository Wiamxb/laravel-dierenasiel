<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Carbon\Carbon;

class UserSeeder extends Seeder
{
    public function run(): void
    {
        // ADMIN
        User::create([
            'name' => 'admin',
            'email' => 'admin@ehb.be',
            'password' => Hash::make('Password!321'),
            'is_admin' => true,
            'birthday' => Carbon::create(1995, 5, 20),
            'about_me' => 'Beheerder van het dierenasiel. Verantwoordelijk voor nieuws, FAQ en contactberichten.',
            'profile_photo' => 'images/profiles/admin.jpg',
        ]);

        // GEBRUIKER
        User::create([
            'name' => 'wiam',
            'email' => 'wiam@ehb.be',
            'password' => Hash::make('Password!321'),
            'is_admin' => false,
            'birthday' => Carbon::create(2002, 9, 14),
            'about_me' => 'Dierenliefhebber en trouwe supporter van het dierenasiel.',
            'profile_photo' => 'images/profiles/user1.jpg',
        ]);
    }
}
