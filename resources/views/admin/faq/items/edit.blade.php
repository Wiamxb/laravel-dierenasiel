<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            FAQ vraag bewerken
        </h2>
    </x-slot>

    <div class="py-6 px-6 max-w-xl">
        <form method="POST" action="{{ route('admin.faq.items.update', $item) }}">
            @csrf
            @method('PUT')

            <div class="mb-4">
                <label class="block font-semibold mb-1">Vraag</label>
                <input
                    type="text"
                    name="question"
                    value="{{ old('question', $item->question) }}"
                    class="w-full border rounded p-2"
                >
            </div>

            <div class="mb-4">
                <label class="block font-semibold mb-1">Antwoord</label>
                <textarea
                    name="answer"
                    class="w-full border rounded p-2"
                    rows="4"
                >{{ old('answer', $item->answer) }}</textarea>
            </div>

            <div class="mb-4">
                <label class="block font-semibold mb-1">Categorie</label>
                <select name="faq_category_id" class="w-full border rounded p-2">
                    @foreach ($categories as $category)
                        <option value="{{ $category->id }}"
                            @selected(old('faq_category_id', $item->faq_category_id) == $category->id)>
                            {{ $category->name }}
                        </option>
                    @endforeach
                </select>
            </div>

            <button class="bg-blue-600 text-white px-4 py-2 rounded">
                Opslaan
            </button>
        </form>
    </div>
</x-app-layout>
