<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Veelgestelde vragen
        </h2>
    </x-slot>

    <div class="py-6 px-6">
        @forelse ($categories as $category)
            <h3 class="font-semibold text-lg mt-6">
                {{ $category->name }}
            </h3>

            <ul class="ml-4 mt-2">
                @forelse ($category->items as $item)
                    <li class="mb-3">
                        <strong>{{ $item->question }}</strong><br>
                        {{ $item->answer }}
                    </li>
                @empty
                    <li>Geen vragen in deze categorie.</li>
                @endforelse
            </ul>
        @empty
            <p>Er zijn nog geen FAQ’s.</p>
        @endforelse
    </div>
</x-app-layout>
