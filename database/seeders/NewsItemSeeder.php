<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\NewsItem;

class NewsItemSeeder extends Seeder
{
    public function run(): void
    {
        NewsItem::create([
            'title' => 'Nieuw opvangcentrum geopend',
            'content' => 'Ons dierenasiel heeft een nieuw opvangcentrum geopend voor honden en katten.',
            'published_at' => now(),
        ]);

        NewsItem::create([
            'title' => 'Adoptiedag dit weekend',
            'content' => 'Kom dit weekend langs en maak kennis met onze dieren.',
            'published_at' => now(),
        ]);
    }
}
