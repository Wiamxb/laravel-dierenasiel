<x-app-layout>
    <x-slot name="header">
        <div>
            <h1 class="text-2xl font-semibold text-gray-900">
                Mijn profiel bewerken
            </h1>
            <p class="text-gray-500 mt-1 text-sm">
                Pas je persoonlijke gegevens aan
            </p>
        </div>
    </x-slot>

    <div class="bg-emerald-50 min-h-screen py-10">
        <div class="max-w-2xl mx-auto px-6">

            <div class="bg-white border border-emerald-100 rounded-xl shadow-sm p-6">

                <form method="POST"
                      action="{{ route('profile.update') }}"
                      enctype="multipart/form-data"
                      class="space-y-5">

                    @csrf

                    <!-- GEBRUIKERSNAAM -->
                    <div>
                        <label class="block text-sm font-semibold text-gray-700 mb-1">
                            Gebruikersnaam
                        </label>
                        <input
                            type="text"
                            name="username"
                            value="{{ old('username', $user->username) }}"
                            class="w-full rounded-md border-gray-300
                                   text-gray-900 text-sm
                                   focus:border-emerald-500 focus:ring-emerald-500"
                            required
                        >
                    </div>

                    <!-- VERJAARDAG -->
                    <div>
                        <label class="block text-sm font-semibold text-gray-700 mb-1">
                            Verjaardag
                        </label>
                        <input
                            type="date"
                            name="birthday"
                            value="{{ old('birthday', $user->birthday) }}"
                            class="w-full rounded-md border-gray-300
                                   text-gray-900 text-sm
                                   focus:border-emerald-500 focus:ring-emerald-500"
                        >
                    </div>

                    <!-- OVER MIJ -->
                    <div>
                        <label class="block text-sm font-semibold text-gray-700 mb-1">
                            Over mij
                        </label>
                        <textarea
                            name="about_me"
                            rows="4"
                            class="w-full rounded-md border-gray-300
                                   text-gray-900 text-sm
                                   focus:border-emerald-500 focus:ring-emerald-500"
                        >{{ old('about_me', $user->about_me) }}</textarea>
                    </div>

                    <!-- PROFIELFOTO -->
                    <div>
                        <label class="block text-sm font-semibold text-gray-700 mb-1">
                            Profielfoto
                        </label>

                        @if ($user->profile_photo)
                            <img
                                src="{{ asset('storage/' . $user->profile_photo) }}"
                                alt="Huidige profielfoto"
                                class="w-32 h-32 object-cover rounded-full mb-3 border"
                            >
                        @endif

                        <input
                            type="file"
                            name="profile_photo"
                            class="block w-full text-sm text-gray-600
                                   file:mr-3 file:py-1.5 file:px-3
                                   file:rounded-md file:border-0
                                   file:bg-emerald-100 file:text-emerald-700
                                   hover:file:bg-emerald-200"
                        >
                    </div>

                    <!-- ACTIES -->
                    <div class="flex justify-end items-center gap-4 pt-4">
                        <a href="{{ url()->previous() }}"
                           class="text-sm font-medium text-gray-600 hover:underline">
                            Annuleren
                        </a>

                        <button
                            type="submit"
                            class="px-4 py-2 text-sm font-medium
                                   bg-emerald-700 text-white
                                   rounded-md hover:bg-emerald-800 transition">
                            Opslaan
                        </button>
                    </div>

                </form>
            </div>

        </div>
    </div>
</x-app-layout>
