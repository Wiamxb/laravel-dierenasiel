<x-app-layout>
    <div class="py-10 bg-emerald-50 min-h-screen">
        <div class="max-w-4xl mx-auto px-6">

            <!-- Bovenbalk: terug + bewerken -->
            <div class="flex justify-between items-center mb-6">
                <a href="{{ route('news.index') }}"
                   class="text-sm text-emerald-700 hover:underline">
                    ← Terug naar nieuws
                </a>

                @auth
                    @if(auth()->user()->is_admin)
                        <a href="{{ route('news.edit', $newsItem) }}"
                           class="px-4 py-2 text-sm font-medium
                                  bg-emerald-700 text-white
                                  rounded-md hover:bg-emerald-800 transition">
                            Bewerken
                        </a>
                    @endif
                @endauth
            </div>

            <article class="bg-white rounded-2xl shadow-lg
                            overflow-hidden border border-emerald-100">

                {{-- AFBEELDING --}}
                @if ($newsItem->image)
                    <img
                        src="{{ asset($newsItem->image) }}"
                        alt="{{ $newsItem->title }}"
                        class="w-full h-80 object-cover"
                    >
                @endif

                <div class="p-8">
                    <h1 class="text-3xl font-bold text-gray-900 mb-2">
                        {{ $newsItem->title }}
                    </h1>

                    <p class="text-sm text-gray-500 mb-6">
                        Gepubliceerd op {{ $newsItem->published_at?->format('d-m-Y') }}
                    </p>

                    <div class="prose max-w-none text-gray-700">
                        {{ $newsItem->content }}
                    </div>
                </div>

            </article>

        </div>
    </div>
</x-app-layout>
