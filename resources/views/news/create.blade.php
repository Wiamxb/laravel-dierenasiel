<x-app-layout>
    <x-slot name="header">
        <div>
            <h1 class="text-2xl font-semibold text-gray-900">
                Nieuwsbericht toevoegen
            </h1>
            <p class="text-gray-500 mt-1 text-sm">
                Voeg een nieuw bericht toe voor het dierenasiel
            </p>
        </div>
    </x-slot>

    <div class="bg-emerald-50 min-h-screen py-10">
        <div class="max-w-2xl mx-auto px-6">

            <a href="{{ route('news.index') }}"
               class="inline-block text-sm text-emerald-700 mb-6 hover:underline">
                ← Terug naar nieuws
            </a>

            <div class="bg-white border border-emerald-100 rounded-xl shadow-sm p-6">

                <form method="POST"
                      action="{{ route('news.store') }}"
                      enctype="multipart/form-data"
                      class="space-y-5">

                    @csrf

                    <!-- TITEL -->
                    <div>
                        <label class="block text-sm font-semibold text-gray-700 mb-1">
                            Titel
                        </label>
                        <input
                            type="text"
                            name="title"
                            value="{{ old('title') }}"
                            placeholder="Nieuwe puppy Bella gearriveerd"
                            class="w-full rounded-md border-gray-300
                                   text-gray-900 text-sm
                                   focus:border-emerald-500 focus:ring-emerald-500"
                            required
                        >
                    </div>

                    <!-- AFBEELDING -->
                    <div>
                        <label class="block text-sm font-semibold text-gray-700 mb-1">
                            Afbeelding (optioneel)
                        </label>

                        <input
                            type="file"
                            name="image"
                            class="block w-full text-sm text-gray-600
                                   file:mr-3 file:py-1.5 file:px-3
                                   file:rounded-md file:border-0
                                   file:bg-emerald-100 file:text-emerald-700
                                   hover:file:bg-emerald-200"
                        >

                        <p class="text-xs text-gray-400 mt-1">
                            Foto van een dier of activiteit
                        </p>
                    </div>

                    <!-- INHOUD -->
                    <div>
                        <label class="block text-sm font-semibold text-gray-700 mb-1">
                            Nieuwsbericht
                        </label>
                        <textarea
                            name="content"
                            rows="5"
                            placeholder="Schrijf hier het nieuwsbericht…"
                            class="w-full rounded-md border-gray-300
                                   text-gray-900 text-sm
                                   focus:border-emerald-500 focus:ring-emerald-500"
                            required
                        >{{ old('content') }}</textarea>
                    </div>

                    <!-- ACTIES -->
                    <div class="flex justify-end items-center gap-4 pt-4">
                        <a href="{{ route('news.index') }}"
                           class="text-sm font-medium text-gray-600 hover:underline">
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
