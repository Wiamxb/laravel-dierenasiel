<nav class="bg-green-700 shadow-xl">
    <div class="max-w-7xl mx-auto px-6">
        <div class="flex justify-between items-center h-16">

            <!-- LEFT -->
            <div class="flex items-center space-x-10">

                <!-- Logo -->
                <a href="{{ route('dashboard') }}" class="flex items-center space-x-3 group">
                    <div
                        class="w-9 h-9 bg-white text-green-600 flex items-center justify-center
                               rounded-lg font-bold shadow-md group-hover:shadow-lg transition-shadow">
                        🐾
                    </div>
                    <span class="text-lg font-bold text-white">
                        Dieren<span class="text-green-200">asiel</span>
                    </span>
                </a>

                <!-- Menu -->
                <div class="flex items-center space-x-6">
                    <a href="{{ route('news.index') }}"
                       class="text-white hover:text-green-200 font-medium transition
                              px-3 py-2 rounded-lg hover:bg-green-600">
                        Nieuws
                    </a>

                    <a href="{{ route('faq.index') }}"
                       class="text-white hover:text-green-200 font-medium transition
                              px-3 py-2 rounded-lg hover:bg-green-600">
                        FAQ
                    </a>

                    {{-- ADMIN DROPDOWN --}}
                    @auth
                        @if(auth()->user()->is_admin)
                            <div class="relative group">

                                <!-- Button -->
                                <button
                                    type="button"
                                    class="text-green-100 font-semibold hover:text-white transition
                                           px-3 py-2 rounded-lg hover:bg-green-600
                                           flex items-center gap-1">
                                    Admin
                                    <svg class="w-4 h-4 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                              d="M19 9l-7 7-7-7"/>
                                    </svg>
                                </button>

                                <!-- Dropdown (GEEN hover-gap meer) -->
                                <div class="absolute left-0 top-full pt-2 w-52 hidden group-hover:block z-50">
                                    <div class="bg-white rounded-lg shadow-lg border border-emerald-100 overflow-hidden">

                                        <a href="{{ route('admin.faq.items.index') }}"
                                           class="block px-4 py-2 text-sm text-gray-700 hover:bg-emerald-50">
                                            FAQ vragen
                                        </a>

                                        <a href="{{ route('admin.faq.categories.index') }}"
                                           class="block px-4 py-2 text-sm text-gray-700 hover:bg-emerald-50">
                                            FAQ categorieën
                                        </a>

                                    </div>
                                </div>
                            </div>
                        @endif
                    @endauth
                </div>
            </div>

            <!-- RIGHT -->
            @auth
                <div class="flex items-center space-x-6">
                    <span class="text-sm text-green-100 font-medium">
                        {{ auth()->user()->name }}
                    </span>

                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <button
                            class="px-4 py-2 text-sm font-semibold text-green-700 bg-white
                                   hover:bg-green-50 rounded-lg transition shadow hover:shadow-md">
                            Uitloggen
                        </button>
                    </form>
                </div>
            @endauth

        </div>
    </div>
</nav>
