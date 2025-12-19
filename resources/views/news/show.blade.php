<x-app-layout>
    <div class="py-10 bg-emerald-50">
        <div class="max-w-4xl mx-auto px-6">

            <!-- Terug knop -->
            <a href="{{ route('news.index') }}"
               class="inline-flex items-center text-emerald-700 font-medium mb-6 hover:underline">
                ← Terug naar nieuws
            </a>

            <article class="bg-white rounded-2xl shadow-lg overflow-hidden border border-emerald-100">

                @if ($newsItem->image)
                    <img
                        src="{{ asset('storage/' . $newsItem->image) }}"
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
