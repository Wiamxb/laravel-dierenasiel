<x-app-layout>
    <x-slot name="header">
        <div>
            <h1 class="text-2xl font-semibold text-gray-900">
                Nieuwe FAQ categorie
            </h1>
            <p class="text-sm text-gray-500 mt-1">
                Voeg een nieuwe categorie toe voor veelgestelde vragen
            </p>
        </div>
    </x-slot>

    <div class="bg-emerald-50 min-h-screen py-10">
        <div class="max-w-2xl mx-auto px-6">

            <!-- Terug -->
            <a href="{{ route('admin.faq.categories.index') }}"
               class="inline-block text-sm text-emerald-700 mb-6 hover:underline">
                ← Terug naar categorieën
            </a>

            <div class="bg-white border border-emerald-100 rounded-xl shadow-sm p-6">

                <form method="POST"
                      action="{{ route('admin.faq.categories.store') }}"
                      class="space-y-5">
                    @csrf

                    <!-- NAAM -->
                    <div>
                        <label class="block text-sm font-semibold text-gray-700 mb-1">
                            Naam categorie
                        </label>

                        <input
                            type="text"
                            name="name"
                            placeholder="Bijv. Adoptie, Vrijwilligers, Bezoeken"
                            class="w-full rounded-md border-gray-300
                                   text-gray-900 text-sm
                                   focus:border-emerald-500 focus:ring-emerald-500"
                            required
                        >
                    </div>

                    <!-- ACTIES -->
                    <div class="flex justify-end items-center gap-4 pt-4">
                        <a href="{{ route('admin.faq.items.index') }}"
                           class="px-4 py-2 text-sm font-medium
              text-gray-600 border border-gray-300
              rounded-md hover:bg-gray-100 transition">
                            Annuleren
                        </a>

                        <button
                            type="submit"
                            class="px-4 py-2 text-sm font-medium
               bg-emerald-700 text-white
               rounded-md hover:bg-emerald-800 transition">
                            Opslaan
                        </button>
                    </div>

                </form>

            </div>
        </div>
    </div>
</x-app-layout>
