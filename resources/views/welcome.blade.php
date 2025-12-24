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
    <div class="bg-emerald-50 py-24">
        <div class="max-w-6xl mx-auto px-6 grid md:grid-cols-2 gap-12 items-center">

            <!-- TEKST -->
            <div>
                <h2 class="text-3xl font-bold text-emerald-900 mb-6">
                    Een veilige opvang voor dieren in nood
                </h2>

                <p class="text-gray-700 text-lg mb-8 leading-relaxed">
                    Ons dierenasiel vangt verlaten en mishandelde dieren op.
                    We zorgen voor hun welzijn en begeleiden hen stap voor stap
                    naar een warme en blijvende thuis.
                </p>

                <a href="{{ route('contact.create') }}"
                   class="inline-block bg-emerald-700 hover:bg-emerald-800
                          text-white px-8 py-3 rounded-lg font-semibold shadow transition">
                    Neem contact met ons op
                </a>
            </div>

            <!-- AFBEELDING -->
            <div>
                <img
                    src="{{ asset('images/hero.jpg') }}"
                    alt="Verzorger met hond in het dierenasiel"
                    class="w-full h-96 object-cover rounded-xl shadow-lg"
                >
            </div>

        </div>
    </div>

    <!-- WAT DOEN WIJ -->
    <div class="py-24 bg-white">
        <div class="max-w-6xl mx-auto px-6">
            <h3 class="text-2xl font-bold text-gray-900 text-center mb-14">
                Wat wij doen
            </h3>

            <div class="grid gap-8 md:grid-cols-3">
                <div class="bg-emerald-50 p-6 rounded-xl shadow-sm text-center">
                    <h4 class="font-semibold text-lg mb-3">Opvang</h4>
                    <p class="text-gray-600">
                        We bieden een veilige en rustige omgeving
                        voor dieren die tijdelijk of langdurig opvang nodig hebben.
                    </p>
                </div>

                <div class="bg-emerald-50 p-6 rounded-xl shadow-sm text-center">
                    <h4 class="font-semibold text-lg mb-3">Verzorging</h4>
                    <p class="text-gray-600">
                        Elk dier krijgt medische zorg, aangepaste voeding
                        en de aandacht die het verdient.
                    </p>
                </div>

                <div class="bg-emerald-50 p-6 rounded-xl shadow-sm text-center">
                    <h4 class="font-semibold text-lg mb-3">Adoptie</h4>
                    <p class="text-gray-600">
                        We begeleiden dieren en adoptanten
                        naar een duurzame en succesvolle adoptie.
                    </p>
                </div>
            </div>
        </div>
    </div>

    <!-- SNELLE LINKS -->
    <div class="py-24 bg-emerald-100">
        <div class="max-w-6xl mx-auto px-6 text-center">
            <h3 class="text-2xl font-bold text-emerald-900 mb-14">
                Meer informatie
            </h3>

            <div class="grid gap-6 md:grid-cols-3">
                <a href="{{ route('news.index') }}"
                   class="block bg-white p-6 rounded-xl shadow hover:shadow-md transition text-left">
                    <h4 class="font-semibold text-lg mb-2">Nieuws</h4>
                    <p class="text-gray-600">
                        Lees het laatste nieuws en updates
                        over het dierenasiel.
                    </p>
                </a>

                <a href="{{ route('faq.index') }}"
                   class="block bg-white p-6 rounded-xl shadow hover:shadow-md transition text-left">
                    <h4 class="font-semibold text-lg mb-2">FAQ</h4>
                    <p class="text-gray-600">
                        Antwoorden op veelgestelde vragen
                        over adoptie en werking.
                    </p>
                </a>

                <a href="{{ route('contact.create') }}"
                   class="block bg-white p-6 rounded-xl shadow hover:shadow-md transition text-left">
                    <h4 class="font-semibold text-lg mb-2">Contact</h4>
                    <p class="text-gray-600">
                        Neem eenvoudig contact met ons op
                        voor meer informatie.
                    </p>
                </a>
            </div>
        </div>
    </div>
</x-app-layout>
