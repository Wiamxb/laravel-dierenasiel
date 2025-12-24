<x-app-layout>
    <x-slot name="header">
        <div>
            <h1 class="font-bold text-2xl text-gray-900">
                Contactberichten
            </h1>
            <p class="text-gray-600 mt-1">
                Beheer en beantwoord berichten van bezoekers
            </p>
        </div>
    </x-slot>

    <div class="py-10 bg-emerald-50 min-h-screen">
        <div class="max-w-7xl mx-auto px-6">

            <!-- INFO VOOR ADMIN -->
            <div class="mb-8 bg-white border border-emerald-200 rounded-xl p-6">
                <h2 class="font-semibold text-lg text-gray-900 mb-2">
                    Werkwijze
                </h2>
                <p class="text-gray-700 text-sm leading-relaxed">
                    Contactberichten worden beantwoord via e-mail.
                    Na het beantwoorden kan het bericht veilig verwijderd worden
                    om het overzicht te bewaren.
                </p>
            </div>

            @if ($messages->count())
                <div class="grid gap-6 sm:grid-cols-2 lg:grid-cols-3">

                    @foreach ($messages as $message)
                        <div class="bg-white rounded-xl shadow
                                    border border-emerald-100
                                    flex flex-col justify-between">

                            <div class="p-6">

                                <!-- NAAM -->
                                <h3 class="text-lg font-semibold text-gray-900 mb-1">
                                    {{ $message->name }}
                                </h3>

                                <!-- EMAIL -->
                                <p class="text-sm text-gray-500 mb-3">
                                    {{ $message->email }}
                                </p>

                                <!-- BERICHT MET LEES MEER -->
                                <div x-data="{ open: false }">
                                    <p class="text-sm text-gray-700 mb-2 leading-relaxed">
                                        <span x-show="!open">
                                            {{ Str::limit($message->message, 200) }}
                                        </span>

                                        <span x-show="open">
                                            {{ $message->message }}
                                        </span>
                                    </p>

                                    @if(strlen($message->message) > 200)
                                        <button
                                            @click="open = !open"
                                            class="text-sm text-emerald-700 font-medium hover:underline"
                                        >
                                            <span x-show="!open">Lees meer</span>
                                            <span x-show="open">Lees minder</span>
                                        </button>
                                    @endif
                                </div>

                                <!-- DATUM -->
                                <p class="text-xs text-gray-400 mt-3">
                                    Ontvangen op {{ $message->created_at->format('d-m-Y H:i') }}
                                </p>
                            </div>

                            <!-- ACTIES -->
                            <div class="border-t border-gray-100 p-4 flex gap-3">

                                <!-- ANTWOORD VIA EMAIL -->
                                <a href="mailto:{{ $message->email }}"
                                   class="flex-1 text-center bg-emerald-600 hover:bg-emerald-700
                                          text-white text-sm font-semibold py-2 rounded-lg transition">
                                    Antwoord via e-mail
                                </a>

                                <!-- VERWIJDEREN -->
                                <form method="POST"
                                      action="{{ route('admin.contact.destroy', $message) }}"
                                      onsubmit="return confirm('Dit bericht definitief verwijderen?')">
                                    @csrf
                                    @method('DELETE')

                                    <button
                                        class="text-sm font-semibold text-red-600 hover:text-red-700
                                               px-4 py-2 rounded-lg transition">
                                        Verwijderen
                                    </button>
                                </form>

                            </div>
                        </div>
                    @endforeach

                </div>
            @else
                <div class="text-center py-16 bg-white rounded-xl border border-emerald-200">
                    <h3 class="text-xl font-semibold text-gray-900 mb-3">
                        Geen contactberichten
                    </h3>
                    <p class="text-gray-600">
                        Er zijn momenteel geen nieuwe berichten.
                    </p>
                </div>
            @endif

        </div>
    </div>
</x-app-layout>
