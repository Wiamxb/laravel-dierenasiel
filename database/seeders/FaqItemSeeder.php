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
        $vrijwilligers = FaqCategory::where('name', 'Vrijwilligers')->first();
        $donaties = FaqCategory::where('name', 'Donaties')->first();

        /*ALGEMEEN*/
        FaqItem::create([
            'question' => 'Wat zijn de openingsuren van het dierenasiel?',
            'answer' => 'Wij zijn elke dag geopend van 10u tot 17u.',
            'faq_category_id' => $algemeen->id,
        ]);

        FaqItem::create([
            'question' => 'Waar is het dierenasiel gelegen?',
            'answer' => 'Ons dierenasiel bevindt zich in Brussel en is vlot bereikbaar met het openbaar vervoer.',
            'faq_category_id' => $algemeen->id,
        ]);

        /*ADOPTIE*/
        FaqItem::create([
            'question' => 'Hoe kan ik een dier adopteren?',
            'answer' => 'Adopties verlopen via een kennismakingsgesprek in het asiel.',
            'faq_category_id' => $adoptie->id,
        ]);

        FaqItem::create([
            'question' => 'Zijn alle dieren gevaccineerd?',
            'answer' => 'Ja, alle dieren worden gecontroleerd en gevaccineerd voor adoptie.',
            'faq_category_id' => $adoptie->id,
        ]);

        /*VRIJWILLIGERs*/
        FaqItem::create([
            'question' => 'Hoe kan ik vrijwilliger worden?',
            'answer' => 'Je kan ons contacteren via het contactformulier om vrijwilliger te worden.',
            'faq_category_id' => $vrijwilligers->id,
        ]);

        FaqItem::create([
            'question' => 'Moet ik ervaring hebben met dieren?',
            'answer' => 'Nee, motivatie is belangrijker dan ervaring. Begeleiding wordt voorzien.',
            'faq_category_id' => $vrijwilligers->id,
        ]);

        /*DONATIES*/
        FaqItem::create([
            'question' => 'Hoe kan ik het dierenasiel steunen?',
            'answer' => 'Je kan ons steunen via financiële donaties of door materiaal te schenken.',
            'faq_category_id' => $donaties->id,
        ]);

        FaqItem::create([
            'question' => 'Waarvoor worden donaties gebruikt?',
            'answer' => 'Donaties worden gebruikt voor voeding, medische zorgen en onderhoud van het asiel.',
            'faq_category_id' => $donaties->id,
        ]);
    }
}
