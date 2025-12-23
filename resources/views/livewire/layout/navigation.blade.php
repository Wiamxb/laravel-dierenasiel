<nav x-data="{ open: false, openAdmin: false }" class="bg-green-700 shadow-xl">
    <div class="max-w-7xl mx-auto px-6">
        <div class="flex justify-between items-center h-16">

            <!-- LEFT -->
            <div class="flex items-center gap-10">

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

                <!-- PUBLIC LINKS (desktop) -->
                <div class="hidden sm:flex items-center space-x-6">
                    <a href="{{ url('/') }}"
                       class="text-white hover:text-green-200 font-medium transition
                              px-3 py-2 rounded-lg hover:bg-green-600">
                        Home
                    </a>

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

                    <a href="{{ route('contact.create') }}"
                       class="text-white hover:text-green-200 font-medium transition
                              px-3 py-2 rounded-lg hover:bg-green-600">
                        Contact
                    </a>
                </div>
            </div>

            <!-- RIGHT (desktop) -->
            <div class="hidden sm:flex items-center space-x-4">

                {{-- GUEST --}}
                @guest
                    <a href="{{ route('login') }}"
                       class="text-white hover:text-green-200 font-medium transition
                              px-3 py-2 rounded-lg hover:bg-green-600">
                        Inloggen
                    </a>

                    <a href="{{ route('register') }}"
                       class="px-4 py-2 text-sm font-semibold text-green-700 bg-white
                              hover:bg-green-50 rounded-lg transition shadow hover:shadow-md">
                        Registreren
                    </a>
                @endguest

                {{-- AUTH --}}
                @auth

                    {{-- ADMIN --}}
                    @if(auth()->user()->is_admin)
                        <div class="relative">
                            <button
                                type="button"
                                @click="openAdmin = !openAdmin"
                                class="text-green-100 font-semibold hover:text-white transition
                                       px-3 py-2 rounded-lg hover:bg-green-600 flex items-center gap-1">
                                Admin
                                <svg class="w-4 h-4 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                          d="M19 9l-7 7-7-7"/>
                                </svg>
                            </button>

                            <div
                                x-show="openAdmin"
                                @click.outside="openAdmin = false"
                                x-transition
                                class="absolute left-0 top-full pt-2 w-56 z-50"
                                style="display: none;"
                            >
                                <div class="bg-white rounded-lg shadow-lg border border-emerald-100 overflow-hidden">

                                    <a href="{{ route('admin.dashboard') }}"
                                       class="block px-4 py-2 text-sm text-gray-700 hover:bg-emerald-50">
                                        Dashboard
                                    </a>

                                    <a href="{{ route('admin.users.index') }}"
                                       class="block px-4 py-2 text-sm text-gray-700 hover:bg-emerald-50">
                                        Gebruikersbeheer
                                    </a>

                                    <a href="{{ route('news.create') }}"
                                       class="block px-4 py-2 text-sm text-gray-700 hover:bg-emerald-50">
                                        Nieuws toevoegen
                                    </a>

                                    <a href="{{ route('admin.faq.items.index') }}"
                                       class="block px-4 py-2 text-sm text-gray-700 hover:bg-emerald-50">
                                        FAQ vragen
                                    </a>

                                    <a href="{{ route('admin.faq.categories.index') }}"
                                       class="block px-4 py-2 text-sm text-gray-700 hover:bg-emerald-50">
                                        FAQ categorieën
                                    </a>

                                    <a href="{{ route('admin.contact.index') }}"
                                       class="block px-4 py-2 text-sm text-gray-700 hover:bg-emerald-50">
                                        Contactberichten
                                    </a>

                                </div>
                            </div>
                        </div>
                    @endif

                    <!-- PROFIEL -->
                    <a href="{{ route('profile.show', auth()->user()->id) }}"
                       class="text-white hover:text-green-200 font-medium transition
                              px-3 py-2 rounded-lg hover:bg-green-600">
                        Profiel
                    </a>

                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <button
                            class="px-4 py-2 text-sm font-semibold text-green-700 bg-white
                                   hover:bg-green-50 rounded-lg transition shadow hover:shadow-md">
                            Uitloggen
                        </button>
                    </form>
                @endauth
            </div>

            <!-- MOBILE button -->
            <div class="flex items-center sm:hidden">
                <button @click="open = !open"
                        class="text-white px-3 py-2 rounded-lg hover:bg-green-600 transition">
                    ☰
                </button>
            </div>
        </div>

        <!-- MOBILE menu -->
        <div x-show="open" x-transition class="sm:hidden pb-4" style="display: none;">
            <div class="mt-2 space-y-1">

                <a href="{{ url('/') }}" class="block text-white px-3 py-2 rounded-lg hover:bg-green-600 transition">
                    Home
                </a>

                <a href="{{ route('news.index') }}" class="block text-white px-3 py-2 rounded-lg hover:bg-green-600 transition">
                    Nieuws
                </a>

                <a href="{{ route('faq.index') }}" class="block text-white px-3 py-2 rounded-lg hover:bg-green-600 transition">
                    FAQ
                </a>

                <a href="{{ route('contact.create') }}" class="block text-white px-3 py-2 rounded-lg hover:bg-green-600 transition">
                    Contact
                </a>

                @guest
                    <a href="{{ route('login') }}" class="block text-white px-3 py-2 rounded-lg hover:bg-green-600 transition">
                        Inloggen
                    </a>

                    <a href="{{ route('register') }}" class="block text-white px-3 py-2 rounded-lg hover:bg-green-600 transition">
                        Registreren
                    </a>
                @endguest

                @auth
                    <a href="{{ route('profile.show', auth()->user()->id) }}"
                       class="block text-white px-3 py-2 rounded-lg hover:bg-green-600 transition">
                        Profiel
                    </a>

                    @if(auth()->user()->is_admin)
                        <div class="mt-2 pt-2 border-t border-green-600">
                            <a href="{{ route('admin.dashboard') }}" class="block text-white px-3 py-2 rounded-lg hover:bg-green-600 transition">
                                Dashboard
                            </a>
                            <a href="{{ route('admin.users.index') }}" class="block text-white px-3 py-2 rounded-lg hover:bg-green-600 transition">
                                Gebruikersbeheer
                            </a>
                            <a href="{{ route('news.create') }}" class="block text-white px-3 py-2 rounded-lg hover:bg-green-600 transition">
                                Nieuws toevoegen
                            </a>
                            <a href="{{ route('admin.faq.items.index') }}" class="block text-white px-3 py-2 rounded-lg hover:bg-green-600 transition">
                                FAQ vragen
                            </a>
                            <a href="{{ route('admin.faq.categories.index') }}" class="block text-white px-3 py-2 rounded-lg hover:bg-green-600 transition">
                                FAQ categorieën
                            </a>
                            <a href="{{ route('admin.contact.index') }}" class="block text-white px-3 py-2 rounded-lg hover:bg-green-600 transition">
                                Contactberichten
                            </a>
                        </div>
                    @endif

                    <form method="POST" action="{{ route('logout') }}" class="mt-2">
                        @csrf
                        <button class="w-full text-left text-white px-3 py-2 rounded-lg hover:bg-green-600 transition">
                            Uitloggen
                        </button>
                    </form>
                @endauth

            </div>
        </div>
    </div>
</nav>
