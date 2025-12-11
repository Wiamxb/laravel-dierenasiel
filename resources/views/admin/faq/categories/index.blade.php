<x-app-layout>
    <a href="{{ route('admin.faq.categories.create') }}"
       class="bg-green-600 text-white px-4 py-2 rounded inline-block mb-4">
        + Categorie toevoegen
    </a>

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
