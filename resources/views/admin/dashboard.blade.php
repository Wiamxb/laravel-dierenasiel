<x-app-layout>
    <x-slot name="header">
        <div>
            <h1 class="text-2xl font-semibold text-gray-900">
                Admin dashboard
            </h1>
            <p class="text-gray-500 mt-1 text-sm">
                Overzicht en beheer van het dierenasiel
            </p>
        </div>
    </x-slot>

    <div class="bg-emerald-50 min-h-screen py-10">
        <div class="max-w-6xl mx-auto px-6">

            <!-- Welkom -->
            <div class="bg-white border border-emerald-100 rounded-xl shadow-sm p-6 mb-8">
                <p class="text-gray-700 text-sm">
                    Welkom <span class="font-semibold">{{ auth()->user()->name }}</span>,
                    je bent ingelogd als administrator
                </p>
            </div>

            <!-- Dashboard cards -->
            <div class="grid gap-6 sm:grid-cols-2 lg:grid-cols-3">

                <!-- Gebruikers -->
                <a href="{{ route('admin.users.index') }}"
                   class="block bg-white border border-emerald-100 rounded-xl p-6
                          hover:shadow-lg transition">
                    <h3 class="text-lg font-semibold text-gray-900 mb-2">
                        Gebruikersbeheer
                    </h3>
                    <p class="text-sm text-gray-600">
                        Beheer alle geregistreerde gebruikers en admins.
                    </p>
                </a>

                <!-- FAQ -->
                <a href="{{ route('admin.faq.items.index') }}"
                   class="block bg-white border border-emerald-100 rounded-xl p-6
                          hover:shadow-lg transition">
                    <h3 class="text-lg font-semibold text-gray-900 mb-2">
                        FAQ beheer
                    </h3>
                    <p class="text-sm text-gray-600">
                        Voeg FAQ-vragen toe en pas bestaande vragen aan.
                    </p>
                </a>

                <!-- Contact -->
                <a href="{{ route('admin.contact.index') }}"
                   class="block bg-white border border-emerald-100 rounded-xl p-6
                          hover:shadow-lg transition">
                    <h3 class="text-lg font-semibold text-gray-900 mb-2">
                        Contactberichten
                    </h3>
                    <p class="text-sm text-gray-600">
                        Bekijk en beheer berichten van bezoekers.
                    </p>
                </a>

                <!-- Nieuws -->
                <a href="{{ route('news.create') }}"
                   class="block bg-white border border-emerald-100 rounded-xl p-6
                          hover:shadow-lg transition">
                    <h3 class="text-lg font-semibold text-gray-900 mb-2">
                        Nieuws beheren
                    </h3>
                    <p class="text-sm text-gray-600">
                        Voeg nieuwe nieuwsberichten toe voor het asiel.
                    </p>
                </a>

            </div>
        </div>
    </div>
</x-app-layout>
