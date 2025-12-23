<x-app-layout>
    <x-slot name="header">
        <div>
            <h1 class="font-bold text-2xl text-gray-900">
                Contactberichten
            </h1>
            <p class="text-gray-600 mt-1">
                Ingekomen berichten via het contactformulier
            </p>
        </div>
    </x-slot>

    <div class="py-10 bg-emerald-50 min-h-screen">
        <div class="max-w-7xl mx-auto px-6">

            @if ($messages->count())
                <div class="grid gap-6 sm:grid-cols-2 lg:grid-cols-3">

                    @foreach ($messages as $message)
                        <div
                            class="bg-white rounded-xl shadow hover:shadow-lg transition
                                   overflow-hidden border border-emerald-100"
                        >
                            <div class="p-6">

                                <!-- NAAM -->
                                <h3 class="text-lg font-semibold text-gray-900 mb-1">
                                    {{ $message->name }}
                                </h3>

                                <!-- EMAIL -->
                                <p class="text-sm text-gray-500 mb-3">
                                    {{ $message->email }}
                                </p>

                                <!-- BERICHT -->
                                <p class="text-sm text-gray-700 mb-4">
                                    {{ Str::limit($message->message, 150) }}
                                </p>

                                <!-- DATUM -->
                                <div class="flex justify-between items-center text-sm text-gray-400">
                                    <span>
                                        {{ $message->created_at->format('d-m-Y H:i') }}
                                    </span>
                                </div>

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
                        Er zijn momenteel nog geen berichten binnengekomen.
                    </p>
                </div>
            @endif

        </div>
    </div>
</x-app-layout>
