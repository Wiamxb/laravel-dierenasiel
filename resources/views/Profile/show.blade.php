<x-app-layout>

    <h1 class="text-2xl font-bold mb-4">
        Profiel van {{ $user->username ?? $user->name }}
    </h1>

    @if($user->profile_photo)
        <img src="{{ asset('storage/' . $user->profile_photo) }}" width="150" class="rounded mb-4">
    @endif

    <p><strong>Naam:</strong> {{ $user->name }}</p>
    <p><strong>Gebruikersnaam:</strong> {{ $user->username ?? 'Niet ingevuld' }}</p>
    <p><strong>Verjaardag:</strong> {{ $user->birthday ?? 'Niet ingevuld' }}</p>

    <p class="mt-4"><strong>Over mij:</strong></p>
    <p>{{ $user->about_me ?? 'Geen informatie beschikbaar.' }}</p>

</x-app-layout>
