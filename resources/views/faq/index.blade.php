<x-app-layout>
    <x-slot name="header">
        <div>
            <h1 class="text-2xl font-bold text-gray-900">Veelgestelde vragen</h1>
            <p class="text-gray-600 mt-1">
                Antwoorden op de meest gestelde vragen over ons dierenasiel
            </p>
        </div>
    </x-slot>

    <div class="bg-emerald-50 min-h-screen py-10">
        <div class="max-w-5xl mx-auto px-6 space-y-8">

            @foreach($categories as $category)
                <section class="bg-white rounded-2xl shadow border border-emerald-100 p-6">

                    <!-- CATEGORIE TITEL -->
                    <h2 class="text-xl font-semibold text-emerald-800 mb-4">
                        {{ $category->name }}
                    </h2>

                    <div class="space-y-3">
                        @foreach($category->items as $item)

                            <details class="group border border-gray-200 rounded-lg p-4 hover:border-emerald-300 transition">
                                <summary class="flex justify-between items-center cursor-pointer list-none">
                                    <span class="font-medium text-gray-800">
                                        {{ $item->question }}
                                    </span>

                                    <span class="text-emerald-600 group-open:rotate-180 transition">
                                        ▼
                                    </span>
                                </summary>

                                <div class="mt-3 text-gray-600 text-sm leading-relaxed">
                                    {{ $item->answer }}
                                </div>
                            </details>

                        @endforeach
                    </div>

                </section>
            @endforeach

        </div>
    </div>
</x-app-layout>
