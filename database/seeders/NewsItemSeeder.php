<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\NewsItem;
use App\Models\User;

class NewsItemSeeder extends Seeder
{
    public function run(): void
    {
        $admin = User::where('is_admin', true)->first();

        NewsItem::create([
            'title' => 'Drukke winterperiode in het dierenasiel',
            'content' => 'Door de koude wintermaanden merken we een stijging in het aantal dieren dat wordt binnengebracht. Ons team doet er alles aan om elk dier de nodige zorg en aandacht te geven.',
            'published_at' => now(),
            'user_id' => $admin->id,
            'image' => 'images/news1.jpg',
        ]);

        NewsItem::create([
            'title' => 'Vrijwilligers gezocht',
            'content' => 'We zijn op zoek naar extra vrijwilligers om te helpen bij de verzorging van de dieren en het onderhoud van het asiel. Interesse? Neem gerust contact met ons op.',
            'published_at' => now(),
            'user_id' => $admin->id,
            'image' => 'images/news2.jpg',
        ]);

        NewsItem::create([
            'title' => 'Succesvolle adopties deze maand',
            'content' => 'Deze maand hebben meerdere honden en katten een nieuwe thuis gevonden. Bedankt aan iedereen die heeft bijgedragen aan deze mooie resultaten.',
            'published_at' => now(),
            'user_id' => $admin->id,
            'image' => 'images/news3.jpg',
        ]);
    }
}
