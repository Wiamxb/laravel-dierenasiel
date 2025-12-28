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
            'name' => 'Admin',
            'username' => 'admin',
            'email' => 'admin@ehb.be',
            'password' => Hash::make('Password!321'),
            'is_admin' => true,
            'birthday' => Carbon::create(1995, 5, 20),
            'about_me' => 'Beheerder van het dierenasiel. Verantwoordelijk voor nieuws, FAQ en contactberichten.',
            'profile_photo' => 'images/profiles/admin.jpg',
        ]);

        // GEWONE GEBRUIKER
        User::create([
            'name' => 'User',
            'username' => 'user',
            'email' => 'user@ehb.be',
            'password' => Hash::make('Password!321'),
            'is_admin' => false,
            'birthday' => Carbon::create(2002, 9, 14),
            'about_me' => 'Gewone gebruiker van de website van het dierenasiel.',
            'profile_photo' => 'images/profiles/user1.jpg',
        ]);
    }
}
