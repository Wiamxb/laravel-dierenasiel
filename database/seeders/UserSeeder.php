<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    public function run(): void
    {
        // Verplichte admin volgens opdracht
        User::create([
            'name' => 'admin',
            'email' => 'admin@ehb.be',
            'password' => Hash::make('Password!321'),
            'is_admin' => true,
        ]);

        // Test gebruiker
        User::create([
            'name' => 'wiam',
            'email' => 'wiam@ehb.be',
            'password' => Hash::make('Password!321'),
            'is_admin' => false,
        ]);
    }
}
