<x-app-layout>
    <h1 class="text-2xl font-bold mb-6">Nieuw nieuwsitem aanmaken</h1>

    <form method="POST" action="{{ route('news.store') }}" enctype="multipart/form-data">
        @csrf

        <label class="block mb-2">Titel</label>
        <input type="text" name="title" class="border p-2 w-full mb-4">

        <label class="block mb-2">Afbeelding</label>
        <input type="file" name="image" class="mb-4">

        <label class="block mb-2">Inhoud</label>
        <textarea name="content" class="border p-2 w-full mb-4"></textarea>

        <button class="bg-blue-600 text-white px-4 py-2 rounded">Opslaan</button>
    </form>
</x-app-layout>
