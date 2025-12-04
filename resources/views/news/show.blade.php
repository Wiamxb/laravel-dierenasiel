<x-app-layout>
    <h1 class="text-3xl font-bold mb-4">{{ $newsItem->title }}</h1>

    @if($newsItem->image)
        <img src="{{ asset('storage/' . $newsItem->image) }}" class="mb-4 w-64">
    @endif

    <p class="mb-4">{{ $newsItem->content }}</p>

    <p class="text-sm text-gray-600">
        Gepubliceerd op: {{ $newsItem->published_at }}
    </p>
</x-app-layout>
