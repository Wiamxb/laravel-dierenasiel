<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\FaqItem;
use App\Models\FaqCategory;

class FaqItemSeeder extends Seeder
{
    public function run(): void
    {
        $algemeen = FaqCategory::where('name', 'Algemeen')->first();
        $adoptie = FaqCategory::where('name', 'Adoptie')->first();

        FaqItem::create([
            'question' => 'Wat zijn de openingsuren van het dierenasiel?',
            'answer' => 'Wij zijn elke dag geopend van 10u tot 17u.',
            'faq_category_id' => $algemeen->id,
        ]);

        FaqItem::create([
            'question' => 'Hoe kan ik een dier adopteren?',
            'answer' => 'Adopties verlopen via een kennismakingsgesprek in het asiel.',
            'faq_category_id' => $adoptie->id,
        ]);
    }
}
