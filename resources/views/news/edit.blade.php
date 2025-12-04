<x-app-layout>
    <h1 class="text-2xl font-bold mb-6">Nieuwsitem bewerken</h1>

    <form method="POST" action="{{ route('news.update', $newsItem->id) }}" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <label class="block mb-2">Titel</label>
        <input type="text" name="title" value="{{ $newsItem->title }}" class="border p-2 w-full mb-4">

        <label class="block mb-2">Afbeelding</label>
        <input type="file" name="image" class="mb-4">

        <label class="block mb-2">Inhoud</label>
        <textarea name="content" class="border p-2 w-full mb-4">{{ $newsItem->content }}</textarea>

        <button class="bg-green-600 text-white px-4 py-2 rounded">Bijwerken</button>
    </form>
</x-app-layout>
