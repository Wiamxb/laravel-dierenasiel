<x-app-layout>
    <h1 class="text-2xl font-bold mb-4">Nieuws</h1>

    @foreach($news as $item)
        <div class="mb-6 p-4 border rounded">
            <h2 class="text-xl font-semibold">
                <a href="{{ route('news.show', $item->id) }}">
                    {{ $item->title }}
                </a>
            </h2>

            @if($item->image)
                <img src="{{ asset('storage/' . $item->image) }}" class="mt-2 w-48">
            @endif

            <p class="mt-2">{{ Str::limit($item->content, 150) }}</p>

            <p class="text-sm text-gray-600 mt-1">
                Gepubliceerd op: {{ $item->published_at }}
            </p>
        </div>
    @endforeach
</x-app-layout>
