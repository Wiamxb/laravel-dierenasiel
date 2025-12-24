<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\FaqCategory;

class FaqCategorySeeder extends Seeder
{
    public function run(): void
    {
        FaqCategory::create(['name' => 'Algemeen']);
        FaqCategory::create(['name' => 'Adoptie']);
        FaqCategory::create(['name' => 'Vrijwilligers']);
        FaqCategory::create(['name' => 'Donaties']);
    }
}
