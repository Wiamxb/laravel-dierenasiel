<x-app-layout>
    <x-slot name="header">
        <div>
            <h1 class="font-bold text-2xl text-gray-900">Nieuws</h1>
            <p class="text-gray-600 mt-1">
                Laatste updates van ons dierenasiel
            </p>
        </div>
    </x-slot>

    <div class="py-10 bg-emerald-50">
        <div class="max-w-7xl mx-auto px-6">

            {{-- ADMIN: nieuws toevoegen --}}
            @auth
                @if(auth()->user()->is_admin)
                    <div class="flex justify-end mb-6">
                        <a href="{{ route('news.create') }}"
                           class="inline-flex items-center px-5 py-2 bg-emerald-700 text-white font-semibold
                                  rounded-lg hover:bg-emerald-800 transition shadow">
                            + Nieuws toevoegen
                        </a>
                    </div>
                @endif
            @endauth

            @if ($news->count())
                <div class="grid gap-6 sm:grid-cols-2 lg:grid-cols-3">
                    @foreach ($news as $item)
                        <div class="bg-white rounded-xl shadow hover:shadow-lg transition overflow-hidden border border-emerald-100">

                            @if ($item->image)
                                <img
                                    src="{{ asset('storage/' . $item->image) }}"
                                    alt="{{ $item->title }}"
                                    class="w-full h-48 object-cover"
                                >
                            @endif

                            <div class="p-6">
                                <h3 class="text-lg font-semibold text-gray-900 mb-2">
                                    {{ $item->title }}
                                </h3>

                                <p class="text-sm text-gray-600 mb-4">
                                    {{ Str::limit($item->content, 120) }}
                                </p>

                                <div class="flex justify-between items-center text-sm text-gray-500">
                                    <span>
                                        {{ $item->published_at?->format('d-m-Y') }}
                                    </span>

                                    <a href="{{ route('news.show', $item) }}"
                                       class="text-emerald-700 font-semibold hover:underline">
                                        Lees meer →
                                    </a>
                                </div>
                            </div>

                        </div>
                    @endforeach
                </div>
            @else
                <div class="text-center py-16 bg-white rounded-xl border border-emerald-200">
                    <h3 class="text-xl font-semibold text-gray-900 mb-3">
                        Geen nieuws gevonden
                    </h3>
                    <p class="text-gray-600">
                        Er zijn momenteel nog geen nieuwsberichten.
                    </p>
                </div>
            @endif

        </div>
    </div>
</x-app-layout>
