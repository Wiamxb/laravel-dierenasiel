<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Nieuwe FAQ vraag
        </h2>
    </x-slot>

    <div class="p-6">
        <form method="POST" action="{{ route('admin.faq.items.store') }}">
            @csrf

            <label class="block mb-2 font-semibold">Vraag</label>
            <input type="text" name="question" class="border p-2 w-full mb-4" required>

            <label class="block mb-2 font-semibold">Antwoord</label>
            <textarea name="answer" class="border p-2 w-full mb-4" required></textarea>

            <label class="block mb-2 font-semibold">Categorie</label>
            <select name="faq_category_id" class="border p-2 w-full mb-4" required>
                @foreach ($categories as $category)
                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                @endforeach
            </select>

            <button class="bg-blue-600 text-white px-4 py-2 rounded">
                Opslaan
            </button>
        </form>
    </div>
</x-app-layout>
