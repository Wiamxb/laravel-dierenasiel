<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        $this->call([
            UserSeeder::class,
            FaqCategorySeeder::class,
            FaqItemSeeder::class,
            NewsItemSeeder::class,
            ContactMessageSeeder::class,
        ]);
    }
}
