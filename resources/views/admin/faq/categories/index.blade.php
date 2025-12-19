<x-app-layout>
    <x-slot name="header">
        <div>
            <h1 class="text-2xl font-semibold text-gray-900">
                FAQ categorieën
            </h1>
            <p class="text-sm text-gray-500 mt-1">
                Beheer de categorieën voor veelgestelde vragen
            </p>
        </div>
    </x-slot>

    <div class="bg-emerald-50 min-h-screen py-10">
        <div class="max-w-4xl mx-auto px-6">

            <!-- Acties -->
            <div class="flex justify-between items-center mb-6">
                <span class="text-sm text-gray-600">
                    Totaal: {{ $categories->count() }} categorieën
                </span>

                <a href="{{ route('admin.faq.categories.create') }}"
                   class="inline-flex items-center gap-2
                          bg-emerald-700 text-white
                          px-4 py-2 rounded-lg
                          text-sm font-medium
                          hover:bg-emerald-800 transition">
                    + Categorie toevoegen
                </a>
            </div>

            <!-- Categorieën lijst -->
            @if ($categories->count())
                <div class="space-y-4">
                    @foreach ($categories as $category)
                        <div
                            class="bg-white border border-emerald-100
                                   rounded-xl shadow-sm
                                   p-5 flex justify-between items-center">

                            <div>
                                <h2 class="text-lg font-semibold text-gray-900">
                                    {{ $category->name }}
                                </h2>

                                <p class="text-sm text-gray-500 mt-1">
                                    {{ $category->faq_items_count ?? 0 }} gekoppelde vragen
                                </p>
                            </div>

                            <div class="flex gap-3 text-sm">
                                {{-- later: bewerken / verwijderen --}}
                            </div>
                        </div>
                    @endforeach
                </div>
            @else
                <div class="bg-white rounded-xl p-6 text-center border border-emerald-100">
                    <p class="text-gray-500">
                        Er zijn nog geen FAQ categorieën aangemaakt.
                    </p>
                </div>
            @endif

        </div>
    </div>
</x-app-layout>
