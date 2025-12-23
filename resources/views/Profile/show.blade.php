<x-app-layout>
    <x-slot name="header">
        <div>
            <h1 class="text-2xl font-semibold text-gray-900">
                Profiel van {{ $user->username }}
            </h1>
            <p class="text-gray-500 mt-1 text-sm">
                Publiek profiel
            </p>
        </div>
    </x-slot>

    <div class="bg-emerald-50 min-h-screen py-10">
        <div class="max-w-3xl mx-auto px-6">

            <div class="bg-white border border-emerald-100 rounded-xl shadow-sm p-6">

                {{-- Header: foto + info + bewerken --}}
                <div class="flex items-start justify-between gap-6 mb-6">

                    <div class="flex items-center gap-6">
                        {{-- Profielfoto --}}
                        <div class="shrink-0">
                            @if ($user->profile_photo)
                                <img
                                    src="{{ asset('storage/' . $user->profile_photo) }}"
                                    alt="Profielfoto"
                                    class="w-28 h-28 rounded-full object-cover border"
                                >
                            @else
                                <div class="w-28 h-28 rounded-full bg-emerald-100
                                            flex items-center justify-center
                                            text-emerald-700 font-semibold">
                                    Geen foto
                                </div>
                            @endif
                        </div>

                        {{-- Basisinfo --}}
                        <div>
                            <p class="text-lg font-semibold text-gray-900">
                                {{ $user->username }}
                            </p>

                            @if ($user->birthday)
                                <p class="text-sm text-gray-600">
                                    🎂 {{ \Carbon\Carbon::parse($user->birthday)->format('d/m/Y') }}
                                </p>
                            @endif
                        </div>
                    </div>

                    {{-- Bewerken knop (alleen eigen profiel) --}}
                    @auth
                        @if (auth()->id() === $user->id)
                            <a href="{{ route('profile.edit') }}"
                               class="inline-flex items-center px-4 py-2
                                      text-sm font-medium
                                      bg-emerald-700 text-white
                                      rounded-md hover:bg-emerald-800 transition">
                                Profiel bewerken
                            </a>
                        @endif
                    @endauth
                </div>

                {{-- Over mij --}}
                <div>
                    <h2 class="text-sm font-semibold text-gray-700 mb-2">
                        Over mij
                    </h2>

                    <p class="text-gray-700 leading-relaxed">
                        {{ $user->about_me ?: 'Geen beschrijving toegevoegd.' }}
                    </p>
                </div>

            </div>

        </div>
    </div>
</x-app-layout>
