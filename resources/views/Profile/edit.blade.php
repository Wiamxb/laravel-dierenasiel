<x-app-layout>

    <h1 class="text-2xl font-bold mb-4">Mijn profiel bewerken</h1>

    <form method="POST" action="{{ route('profile.update') }}" enctype="multipart/form-data">
        @csrf

        <div class="mb-4">
            <label class="block font-semibold">Gebruikersnaam:</label>
            <input type="text" name="username" value="{{ old('username', $user->username) }}" class="border px-2 py-1 w-full">
        </div>

        <div class="mb-4">
            <label class="block font-semibold">Verjaardag:</label>
            <input type="date" name="birthday" value="{{ old('birthday', $user->birthday) }}" class="border px-2 py-1 w-full">
        </div>

        <div class="mb-4">
            <label class="block font-semibold">Over mij:</label>
            <textarea name="about_me" class="border px-2 py-1 w-full">{{ old('about_me', $user->about_me) }}</textarea>
        </div>

        <div class="mb-4">
            <label class="block font-semibold">Profielfoto:</label>
            <input type="file" name="profile_photo">
        </div>

        <button type="submit" class="bg-blue-600 text-white px-4 py-2 rounded">
            Opslaan
        </button>
    </form>

</x-app-layout>
