<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            FAQ vragen (admin)
        </h2>
    </x-slot>

    <div class="py-6 px-6">

        <a href="{{ route('admin.faq.items.create') }}"
           class="bg-green-600 text-white px-4 py-2 rounded inline-block mb-6">
            + Vraag toevoegen
        </a>

        @if ($items->count())
            <ul class="space-y-4">
                @foreach ($items as $item)
                    <li class="p-4 bg-white rounded shadow">
                        <p class="font-semibold">
                            {{ $item->question }}
                        </p>

                        <p class="text-sm text-gray-600 mb-3">
                            Categorie:
                            {{ $item->category?->name ?? 'Geen categorie' }}
                        </p>

                        <div class="flex gap-4">
                            <!-- Bewerken -->
                            <a href="{{ route('admin.faq.items.edit', $item) }}"
                               class="text-blue-600 text-sm">
                                Bewerken
                            </a>

                            <!-- Verwijderen -->
                            <form action="{{ route('admin.faq.items.destroy', $item) }}"
                                  method="POST"
                                  onsubmit="return confirm('Ben je zeker dat je deze vraag wil verwijderen?')">
                                @csrf
                                @method('DELETE')

                                <button class="text-red-600 text-sm">
                                    Verwijderen
                                </button>
                            </form>
                        </div>
                    </li>
                @endforeach
            </ul>
        @else
            <p>Geen FAQ vragen gevonden.</p>
        @endif

    </div>
</x-app-layout>
