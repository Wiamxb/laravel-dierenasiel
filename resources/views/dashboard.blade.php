<x-app-layout>
    <x-slot name="header">
        <div>
            <h1 class="font-bold text-2xl text-gray-900">
                Welkom, {{ auth()->user()->name }}
            </h1>
            <p class="text-gray-600 mt-1">
                Bedankt om het dierenasiel te steunen
            </p>
        </div>
    </x-slot>

    <div class="py-10 bg-emerald-50 min-h-screen">
        <div class="max-w-5xl mx-auto px-6">

            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">

                <!-- NIEUWS -->
                <a href="{{ route('news.index') }}"
                   class="bg-white border border-emerald-100 rounded-xl p-6 shadow-sm
                          hover:shadow-md transition block">
                    <h3 class="text-lg font-semibold text-gray-900 mb-2">
                        Nieuws
                    </h3>
                    <p class="text-gray-600">
                        Lees het laatste nieuws over het dierenasiel
                    </p>
                </a>

                <!-- FAQ -->
                <a href="{{ route('faq.index') }}"
                   class="bg-white border border-emerald-100 rounded-xl p-6 shadow-sm
                          hover:shadow-md transition block">
                    <h3 class="text-lg font-semibold text-gray-900 mb-2">
                        Veelgestelde vragen
                    </h3>
                    <p class="text-gray-600">
                        Antwoorden op de meest gestelde vragen
                    </p>
                </a>

                <!-- CONTACT -->
                <a href="{{ route('contact.create') }}"
                   class="bg-white border border-emerald-100 rounded-xl p-6 shadow-sm
                          hover:shadow-md transition block">
                    <h3 class="text-lg font-semibold text-gray-900 mb-2">
                        Contact
                    </h3>
                    <p class="text-gray-600">
                        Neem contact op met het dierenasiel
                    </p>
                </a>

                <!-- PROFIEL -->
                <a href="{{ route('profile.edit') }}"
                   class="bg-white border border-emerald-100 rounded-xl p-6 shadow-sm
                          hover:shadow-md transition block">
                    <h3 class="text-lg font-semibold text-gray-900 mb-2">
                        Mijn profiel
                    </h3>
                    <p class="text-gray-600">
                        Bekijk of wijzig je profielgegevens
                    </p>
                </a>

            </div>

        </div>
    </div>
</x-app-layout>
