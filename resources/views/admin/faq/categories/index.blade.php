<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            FAQ categorieën (admin)
        </h2>
    </x-slot>

    <div class="py-6 px-6">
        @if ($categories->count())
            <ul>
                @foreach ($categories as $category)
                    <li>- {{ $category->name }}</li>
                @endforeach
            </ul>
        @else
            <p>Geen categorieën gevonden.</p>
        @endif
    </div>
</x-app-layout>
