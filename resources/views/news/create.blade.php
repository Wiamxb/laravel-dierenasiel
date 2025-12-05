<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Nieuw nieuwsitem aanmaken
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-4xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-6">

                <form method="POST" action="{{ route('news.store') }}" enctype="multipart/form-data">
                    @csrf

                    <!-- Titel -->
                    <label class="block mb-2 font-semibold">Titel</label>
                    <input type="text" name="title" class="border p-2 w-full mb-4">

                    <!-- Afbeelding -->
                    <label class="block mb-2 font-semibold">Afbeelding</label>
                    <input type="file" name="image" class="mb-4">

                    <!-- Inhoud -->
                    <label class="block mb-2 font-semibold">Inhoud</label>
                    <textarea name="content" class="border p-2 w-full mb-4" rows="5"></textarea>

                    <!-- Opslaan knop -->
                    <button type="submit"
                            class="bg-green-600 text-white px-4 py-2 rounded shadow hover:bg-green-700 transition">
                        Opslaan
                    </button>




                </form>

            </div>
        </div>
    </div>
</x-app-layout>
