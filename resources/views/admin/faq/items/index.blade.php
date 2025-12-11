<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            FAQ vragen (admin)
        </h2>
    </x-slot>

    <div class="py-6 px-6">
        <a href="{{ route('admin.faq.items.create') }}"
           class="bg-green-600 text-white px-4 py-2 rounded inline-block mb-4">
            + Vraag toevoegen
        </a>

        @if ($items->count())
            <ul>
                @foreach ($items as $item)
                    <li class="mb-4">
                        <strong>{{ $item->question }}</strong><br>
                        <em>Categorie: {{ $item->category?->name ?? 'Geen categorie' }}</em>
                    </li>
                @endforeach
            </ul>
        @else
            <p>Geen FAQ vragen gevonden.</p>
        @endif
    </div>
</x-app-layout>
