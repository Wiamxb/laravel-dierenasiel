<x-app-layout>
    <x-slot name="header">
        <div>
            <h1 class="text-2xl font-semibold text-gray-900">
                FAQ categorieën
            </h1>
            <p class="text-sm text-gray-500 mt-1">
                Beheer en doorzoek FAQ-categorieën
            </p>
        </div>
    </x-slot>

    <div class="bg-emerald-50 min-h-screen py-10">
        <div class="max-w-4xl mx-auto px-6">

            <!-- Acties -->
            <div class="flex flex-col md:flex-row md:justify-between md:items-center gap-4 mb-6">

                <!-- Zoek -->
                <form method="GET" class="flex gap-2">
                    <input
                        type="text"
                        name="search"
                        value="{{ request('search') }}"
                        placeholder="Zoek categorie..."
                        class="rounded-md border-gray-300 text-sm
                               focus:border-emerald-500 focus:ring-emerald-500"
                    >

                    <button
                        class="px-4 py-2 bg-emerald-700 text-white
                               text-sm rounded-md hover:bg-emerald-800 transition">
                        Zoeken
                    </button>
                </form>

                <!-- Toevoegen -->
                <a href="{{ route('admin.faq.categories.create') }}"
                   class="inline-flex items-center gap-2
                          bg-emerald-700 text-white
                          px-4 py-2 rounded-lg
                          text-sm font-medium
                          hover:bg-emerald-800 transition">
                    + Categorie toevoegen
                </a>
            </div>

            <!-- Categorieën -->
            <div class="space-y-4">
                @forelse ($categories as $category)
                    <div class="bg-white border border-emerald-100 rounded-xl shadow-sm p-5
                                flex justify-between items-center">

                        <div>
                            <h2 class="text-lg font-semibold text-gray-900">
                                {{ $category->name }}
                            </h2>

                            <p class="text-sm text-gray-500 mt-1">
                                {{ $category->faq_items_count }} gekoppelde vragen
                            </p>
                        </div>

                        <form method="POST"
                              action="{{ route('admin.faq.categories.destroy', $category) }}"
                              onsubmit="return confirm('Deze categorie verwijderen?')">
                            @csrf
                            @method('DELETE')

                            <button
                                class="text-red-600 text-sm font-semibold
                                       hover:text-red-700 transition">
                                Verwijderen
                            </button>
                        </form>

                    </div>
                @empty
                    <div class="bg-white rounded-xl p-6 text-center border border-emerald-100">
                        <p class="text-gray-500">
                            Geen FAQ categorieën gevonden.
                        </p>
                    </div>
                @endforelse
            </div>

        </div>
    </div>
</x-app-layout>
