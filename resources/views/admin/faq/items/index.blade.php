<x-app-layout>
    <x-slot name="header">
        <div>
            <h1 class="text-2xl font-semibold text-gray-900">
                FAQ beheer
            </h1>
            <p class="text-sm text-gray-500 mt-1">
                Beheer alle veelgestelde vragen van het dierenasiel
            </p>
        </div>
    </x-slot>

    <div class="bg-emerald-50 min-h-screen py-10">
        <div class="max-w-4xl mx-auto px-6">

            {{-- Topbar --}}
            <div class="flex justify-between items-center mb-6">
                <p class="text-sm text-gray-600">
                    Totaal: <strong>{{ $items->count() }}</strong> vragen
                </p>

                <a href="{{ route('admin.faq.items.create') }}"
                   class="inline-flex items-center px-4 py-2
                          bg-emerald-700 text-white text-sm font-medium
                          rounded-lg hover:bg-emerald-800 transition shadow">
                    + Nieuwe vraag
                </a>
            </div>

            {{-- FAQ items --}}
            <div class="space-y-4">
                @forelse ($items as $item)
                    <div class="bg-white border border-emerald-100 rounded-xl shadow-sm p-5">

                        <div class="flex justify-between items-start gap-6">
                            <div>
                                <h2 class="text-lg font-semibold text-gray-900">
                                    {{ $item->question }}
                                </h2>

                                <p class="text-sm text-gray-500 mt-1">
                                    Categorie:
                                    <span class="font-medium">
                                        {{ $item->category->name ?? 'Geen categorie' }}
                                    </span>
                                    · Bijgewerkt: {{ $item->updated_at->format('d-m-Y') }}
                                </p>
                            </div>

                            {{-- Acties --}}
                            <div class="flex items-center gap-3">
                                <a href="{{ route('admin.faq.items.edit', $item) }}"
                                   confirm("Weet je zeker dat je deze vraag wil verwijderen?")
                                class="px-3 py-1.5 text-sm font-medium
                                text-emerald-700 border border-emerald-600
                                rounded-md hover:bg-emerald-50 transition">
                                Bewerken
                                </a>

                                <form method="POST"
                                      action="{{ route('admin.faq.items.destroy', $item) }}">
                                    @csrf
                                    @method('DELETE')
                                    <button
                                        class="px-3 py-1.5 text-sm font-medium
                                               text-white bg-red-600
                                               rounded-md hover:bg-red-700 transition">
                                        Verwijderen
                                    </button>
                                </form>
                            </div>
                        </div>

                    </div>
                @empty
                    <div class="bg-white border border-emerald-200 rounded-xl p-10 text-center">
                        <p class="text-gray-600">
                            Er zijn nog geen FAQ-vragen aangemaakt.
                        </p>
                    </div>
                @endforelse
            </div>

        </div>
    </div>
</x-app-layout>
