<x-app-layout>
    <x-slot name="header">
        <div>
            <h1 class="font-bold text-2xl text-gray-900">
                Welkom bij het Dierenasiel
            </h1>
            <p class="text-gray-600 mt-1">
                Samen geven we dieren een nieuwe kans
            </p>
        </div>
    </x-slot>

    <!-- HERO -->
    <div class="bg-emerald-50 py-20">
        <div class="max-w-5xl mx-auto px-6 text-center">
            <h2 class="text-3xl font-bold text-emerald-900 mb-6">
                Een veilige opvang voor dieren in nood
            </h2>

            <p class="text-gray-700 text-lg mb-10 leading-relaxed">
                Wij vangen verlaten en mishandelde dieren op,
                zorgen voor hun welzijn en begeleiden hen
                naar een warme, blijvende thuis.
            </p>

            <a href="{{ route('contact.create') }}"
               class="inline-block bg-emerald-700 hover:bg-emerald-800
                      text-white px-8 py-3 rounded-lg font-semibold shadow transition">
                Contacteer ons
            </a>
        </div>
    </div>

    <!-- WAT DOEN WIJ -->
    <div class="py-20 bg-white">
        <div class="max-w-6xl mx-auto px-6">
            <h3 class="text-2xl font-bold text-gray-900 text-center mb-12">
                Wat wij doen
            </h3>

            <div class="grid gap-8 md:grid-cols-3">
                <div class="bg-emerald-50 p-6 rounded-xl shadow-sm text-center">
                    <h4 class="font-semibold text-lg mb-3">Opvang</h4>
                    <p class="text-gray-600">
                        We bieden een veilige en rustige omgeving
                        voor dieren die hulp nodig hebben.
                    </p>
                </div>

                <div class="bg-emerald-50 p-6 rounded-xl shadow-sm text-center">
                    <h4 class="font-semibold text-lg mb-3">Verzorging</h4>
                    <p class="text-gray-600">
                        Elk dier krijgt de nodige medische zorg,
                        voeding en aandacht.
                    </p>
                </div>

                <div class="bg-emerald-50 p-6 rounded-xl shadow-sm text-center">
                    <h4 class="font-semibold text-lg mb-3">Adoptie</h4>
                    <p class="text-gray-600">
                        We begeleiden dieren en adoptanten
                        naar een succesvolle match.
                    </p>
                </div>
            </div>
        </div>
    </div>

    <!-- SNELLE LINKS -->
    <div class="py-20 bg-emerald-100">
        <div class="max-w-6xl mx-auto px-6 text-center">
            <h3 class="text-2xl font-bold text-emerald-900 mb-12">
                Meer informatie
            </h3>

            <div class="grid gap-6 md:grid-cols-3">
                <a href="{{ route('news.index') }}"
                   class="block bg-white p-6 rounded-xl shadow hover:shadow-md transition text-left">
                    <h4 class="font-semibold text-lg mb-2">Nieuws</h4>
                    <p class="text-gray-600">
                        Blijf op de hoogte van updates
                        en activiteiten van het asiel.
                    </p>
                </a>

                <a href="{{ route('faq.index') }}"
                   class="block bg-white p-6 rounded-xl shadow hover:shadow-md transition text-left">
                    <h4 class="font-semibold text-lg mb-2">FAQ</h4>
                    <p class="text-gray-600">
                        Antwoorden op veelgestelde vragen.
                    </p>
                </a>

                <a href="{{ route('contact.create') }}"
                   class="block bg-white p-6 rounded-xl shadow hover:shadow-md transition text-left">
                    <h4 class="font-semibold text-lg mb-2">Contact</h4>
                    <p class="text-gray-600">
                        Neem eenvoudig contact met ons op.
                    </p>
                </a>
            </div>
        </div>
    </div>
</x-app-layout>
