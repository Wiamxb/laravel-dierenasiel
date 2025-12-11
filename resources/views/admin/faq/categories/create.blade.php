<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Nieuwe FAQ categorie
        </h2>
    </x-slot>

    <div class="py-6 px-6">
        <form method="POST" action="{{ route('admin.faq.categories.store') }}">
            @csrf

            <label class="block mb-2 font-semibold">Naam</label>

            <input
                type="text"
                name="name"
                class="border p-2 w-full mb-4"
                required
            >

            <button class="bg-blue-600 text-white px-4 py-2 rounded">
                Opslaan
            </button>
        </form>
    </div>
</x-app-layout>
