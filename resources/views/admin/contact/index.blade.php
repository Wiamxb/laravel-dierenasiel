<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800">
            Contactberichten
        </h2>
    </x-slot>

    <div class="py-8 max-w-5xl mx-auto px-4">
        @if ($messages->count())
            <div class="space-y-4">
                @foreach ($messages as $message)
                    <div class="bg-white border rounded p-4 shadow-sm">
                        <p class="font-semibold">{{ $message->name }}</p>
                        <p class="text-sm text-gray-600">{{ $message->email }}</p>

                        <p class="mt-2 text-gray-800">
                            {{ $message->message }}
                        </p>

                        <p class="mt-2 text-xs text-gray-400">
                            {{ $message->created_at->format('d-m-Y H:i') }}
                        </p>
                    </div>
                @endforeach
            </div>
        @else
            <p>Geen contactberichten gevonden.</p>
        @endif
    </div>
</x-app-layout>
