<x-app-layout>
    <x-slot name="header">
        <div>
            <h1 class="font-bold text-2xl text-gray-900">FAQ Beheer</h1>
            <p class="text-gray-600 mt-1">Beheer alle veelgestelde vragen</p>
        </div>
    </x-slot>

    <div class="py-8">
        <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">

            <div class="flex flex-col sm:flex-row sm:items-center sm:justify-between gap-4 mb-6">
                <div class="text-sm text-gray-600">
                    Totaal: <span class="font-semibold text-gray-900">{{ $items->count() }}</span> vragen
                </div>

                <a href="{{ route('admin.faq.items.create') }}"
                   class="inline-flex items-center justify-center bg-indigo-600 hover:bg-indigo-700 text-white px-5 py-2.5 rounded-lg font-semibold shadow-sm transition">
                    + Nieuwe vraag
                </a>
            </div>

            @if ($items->count())
                <div class="grid gap-4">
                    @foreach ($items as $item)
                        <div class="bg-white rounded-xl border border-gray-200 p-6 shadow-sm hover:shadow-md transition">
                            <div class="flex flex-col md:flex-row md:items-start md:justify-between gap-4">

                                <div class="flex-1">
                                    <h3 class="text-lg font-semibold text-gray-900">
                                        {{ $item->question }}
                                    </h3>

                                    <div class="mt-3 flex flex-col sm:flex-row sm:items-center gap-2 sm:gap-6 text-sm">
                                        <div>
                                            <span class="text-gray-500 font-medium">Categorie:</span>
                                            <span class="text-gray-900">{{ $item->category?->name ?? 'Geen categorie' }}</span>
                                        </div>

                                        <div>
                                            <span class="text-gray-500 font-medium">Bijgewerkt:</span>
                                            <span class="text-gray-900">{{ $item->updated_at->format('d-m-Y') }}</span>
                                        </div>
                                    </div>
                                </div>

                                <div class="flex items-center gap-3 md:pt-1">
                                    <a href="{{ route('admin.faq.items.edit', $item) }}"
                                       class="inline-flex items-center justify-center px-4 py-2 rounded-lg font-medium border border-blue-600 text-blue-700 hover:bg-blue-50 transition">
                                        Bewerken
                                    </a>

                                    <form action="{{ route('admin.faq.items.destroy', $item) }}"
                                          method="POST"
                                          onsubmit="return confirm('Weet je zeker dat je deze vraag wil verwijderen?')">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit"
                                                class="inline-flex items-center justify-center px-4 py-2 rounded-lg font-medium bg-red-600 hover:bg-red-700 text-white transition">
                                            Verwijderen
                                        </button>
                                    </form>
                                </div>

                            </div>
                        </div>
                    @endforeach
                </div>
            @else
                <div class="text-center py-16 bg-white rounded-xl border border-gray-200">
                    <div class="max-w-md mx-auto px-6">
                        <h3 class="text-xl font-semibold text-gray-900 mb-3">Nog geen FAQ vragen</h3>
                        <p class="text-gray-600 mb-6">Voeg je eerste vraag toe om bezoekers te helpen.</p>
                        <a href="{{ route('admin.faq.items.create') }}"
                           class="inline-flex items-center justify-center bg-indigo-600 hover:bg-indigo-700 text-white px-6 py-3 rounded-lg font-semibold shadow-sm transition">
                            Eerste vraag toevoegen
                        </a>
                    </div>
                </div>
            @endif

        </div>
    </div>
</x-app-layout>
