<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\ContactMessage;

class ContactMessageSeeder extends Seeder
{
    public function run(): void
    {
        ContactMessage::create([
            'name' => 'Jan Peeters',
            'email' => 'jan.peeters@gmail.com',
            'message' => 'Hallo, ik had graag wat meer informatie over adoptieprocedures. Moet ik op afspraak langskomen of mag ik gewoon binnenlopen?',
        ]);

        ContactMessage::create([
            'name' => 'Sarah De Smet',
            'email' => 'sarah.desmet@hotmail.com',
            'message' => 'Ik ben geïnteresseerd om vrijwilliger te worden. Zijn er specifieke dagen waarop hulp nodig is?',
        ]);

        ContactMessage::create([
            'name' => 'Tom Vermeulen',
            'email' => 'tomv@gmail.com',
            'message' => 'Ik wou even bedanken voor het geweldige werk dat jullie doen. Dankzij jullie hebben wij een fantastische hond geadopteerd.',
        ]);
    }
}

