<x-app-layout>
    <x-slot name="header">
        <div>
            <h1 class="text-2xl font-semibold text-gray-900">
                Contacteer het dierenasiel
            </h1>
            <p class="text-gray-500 mt-1 text-sm">
                Stuur ons je vraag of bericht
            </p>
        </div>
    </x-slot>

    <div class="bg-emerald-50 min-h-screen py-10">
        <div class="max-w-2xl mx-auto px-6">

            @if(session('success'))
                <div class="bg-green-100 text-green-800 p-4 rounded-md mb-6">
                    {{ session('success') }}
                </div>
            @endif

            <div class="bg-white border border-emerald-100 rounded-xl shadow-sm p-6">

                <form method="POST"
                      action="{{ route('contact.store') }}"
                      class="space-y-5">
                    @csrf

                    <!-- NAAM -->
                    <div>
                        <label class="block text-sm font-semibold text-gray-700 mb-1">
                            Naam
                        </label>
                        <input
                            type="text"
                            name="name"
                            class="w-full rounded-md border-gray-300
                                   text-gray-900 text-sm
                                   focus:border-emerald-500 focus:ring-emerald-500"
                            required
                        >
                    </div>

                    <!-- E-MAIL -->
                    <div>
                        <label class="block text-sm font-semibold text-gray-700 mb-1">
                            E-mail
                        </label>
                        <input
                            type="email"
                            name="email"
                            class="w-full rounded-md border-gray-300
                                   text-gray-900 text-sm
                                   focus:border-emerald-500 focus:ring-emerald-500"
                            required
                        >
                    </div>

                    <!-- BERICHT -->
                    <div>
                        <label class="block text-sm font-semibold text-gray-700 mb-1">
                            Bericht
                        </label>
                        <textarea
                            name="message"
                            rows="5"
                            class="w-full rounded-md border-gray-300
                                   text-gray-900 text-sm
                                   focus:border-emerald-500 focus:ring-emerald-500"
                            required
                        ></textarea>
                    </div>

                    <!-- ACTIES -->
                    <div class="flex justify-end pt-4">
                        <button
                            type="submit"
                            class="px-4 py-2 text-sm font-medium
                                   bg-emerald-700 text-white
                                   rounded-md hover:bg-emerald-800 transition">
                            Verzenden
                        </button>
                    </div>

                </form>
            </div>

        </div>
    </div>
</x-app-layout>
