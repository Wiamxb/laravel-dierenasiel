<x-app-layout>
    <x-slot name="header">
        <div>
            <h1 class="font-bold text-2xl text-gray-900">
                Gebruikersbeheer
            </h1>
            <p class="text-gray-600 mt-1">
                Beheer en doorzoek gebruikers van het dierenasiel
            </p>
        </div>
    </x-slot>

    <div class="py-10 bg-emerald-50 min-h-screen">
        <div class="max-w-5xl mx-auto px-6">

            <div class="bg-white border border-emerald-100 rounded-xl shadow-sm p-6 space-y-6">

                <!-- STATISTIEK -->
                <div class="flex gap-6 text-sm">
                    <div>
                        <span class="font-semibold text-gray-900">
                            {{ $users->count() }}
                        </span>
                        <span class="text-gray-500">gebruikers</span>
                    </div>

                    <div>
                        <span class="font-semibold text-emerald-700">
                            {{ $users->where('is_admin', true)->count() }}
                        </span>
                        <span class="text-gray-500">admins</span>
                    </div>

                    <div>
                        <span class="font-semibold text-gray-700">
                            {{ $users->where('is_admin', false)->count() }}
                        </span>
                        <span class="text-gray-500">users</span>
                    </div>
                </div>

                <!-- ZOEK & FILTER -->
                <form method="GET" class="flex flex-col md:flex-row gap-3">

                    <input
                        type="text"
                        name="search"
                        value="{{ request('search') }}"
                        placeholder="Zoek op naam of e-mail"
                        class="flex-1 rounded-md border-gray-300
                               focus:border-emerald-500 focus:ring-emerald-500 text-sm"
                    >

                    <select
                        name="role"
                        class="w-full md:w-44 rounded-md border-gray-300
                               focus:border-emerald-500 focus:ring-emerald-500 text-sm"
                    >
                        <option value="">Alle rollen</option>
                        <option value="admin" @selected(request('role') === 'admin')>
                            Admins
                        </option>
                        <option value="user" @selected(request('role') === 'user')>
                            Users
                        </option>
                    </select>

                    <button
                        class="px-4 py-2 bg-emerald-700 text-white text-sm font-semibold
                               rounded-md hover:bg-emerald-800 transition">
                        Zoeken
                    </button>
                </form>

                <!-- TABEL -->
                <div class="overflow-hidden rounded-lg border border-gray-200">
                    <table class="w-full text-sm">
                        <thead class="bg-gray-50 text-gray-700">
                        <tr>
                            <th class="px-4 py-2 text-left font-semibold">Naam</th>
                            <th class="px-4 py-2 text-left font-semibold">E-mail</th>
                            <th class="px-4 py-2 text-left font-semibold">Rol</th>
                            <th class="px-4 py-2 text-right font-semibold">Acties</th>
                        </tr>
                        </thead>

                        <tbody class="divide-y">
                        @forelse ($users as $user)
                            <tr class="hover:bg-gray-50 transition">

                                <!-- NAAM -->
                                <td class="px-4 py-2 font-medium text-gray-900">
                                    {{ $user->name }}
                                </td>

                                <!-- EMAIL -->
                                <td class="px-4 py-2 text-gray-600">
                                    {{ $user->email }}
                                </td>

                                <!-- ROL -->
                                <td class="px-4 py-2">
                                    @if($user->is_admin)
                                        <span
                                            class="inline-flex px-3 py-1 text-sm font-medium
                                                   bg-emerald-100 text-emerald-800 rounded-md">
                                            Admin
                                        </span>
                                    @else
                                        <span
                                            class="inline-flex px-3 py-1 text-sm font-medium
                                                   bg-gray-100 text-gray-700 rounded-md">
                                            User
                                        </span>
                                    @endif
                                </td>

                                <!-- ACTIES -->
                                <td class="px-4 py-2 text-right">
                                    @if(!$user->is_admin)
                                        <form method="POST"
                                              action="{{ route('admin.users.destroy', $user) }}"
                                              onsubmit="return confirm('Weet je zeker dat je deze gebruiker wil verwijderen?')">
                                            @csrf
                                            @method('DELETE')

                                            <button
                                                class="inline-flex items-center px-3 py-1
                                                       text-sm font-medium rounded-md
                                                       text-red-700 bg-red-50
                                                       hover:bg-red-100 transition">
                                                Verwijderen
                                            </button>
                                        </form>
                                    @else
                                        <span
                                            class="inline-flex items-center px-3 py-1
                                                   text-sm font-medium rounded-md
                                                   text-gray-600 bg-gray-100">
                                            Beschermd
                                        </span>
                                    @endif
                                </td>

                            </tr>
                        @empty
                            <tr>
                                <td colspan="4"
                                    class="px-4 py-8 text-center text-gray-500">
                                    Geen gebruikers gevonden
                                </td>
                            </tr>
                        @endforelse
                        </tbody>
                    </table>
                </div>

                <!-- INFO -->
                <p class="text-sm text-gray-500">
                    Admins kunnen enkel gewone gebruikers verwijderen.
                    Administrator-accounts zijn beschermd.
                </p>

            </div>
        </div>
    </div>
</x-app-layout>
