<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            FAQ vraag toevoegen
        </h2>
    </x-slot>

    <div class="py-6 px-6 max-w-xl">
        <form method="POST" action="{{ route('admin.faq.items.store') }}">
            @csrf

            <div class="mb-4">
                <label class="block mb-1">Vraag</label>
                <input type="text" name="question" class="w-full border rounded px-3 py-2" required>
            </div>

            <div class="mb-4">
                <label class="block mb-1">Antwoord</label>
                <textarea name="answer" class="w-full border rounded px-3 py-2" rows="4" required></textarea>
            </div>

            <div class="mb-4">
                <label class="block mb-1">Categorie</label>
                <select name="faq_category_id" class="w-full border rounded px-3 py-2">
                    <option value="">Geen categorie</option>
                    @foreach ($categories as $category)
                        <option value="{{ $category->id }}">{{ $category->name }}</option>
                    @endforeach
                </select>
            </div>

            <button class="bg-blue-600 text-white px-4 py-2 rounded">
                Opslaan
            </button>
        </form>
    </div>
</x-app-layout>
