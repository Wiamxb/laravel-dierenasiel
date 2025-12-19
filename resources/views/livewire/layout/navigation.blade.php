<nav class="bg-green-700 shadow-xl">
    <div class="max-w-7xl mx-auto px-6">
        <div class="flex justify-between items-center h-16">

            <!-- LEFT -->
            <div class="flex items-center space-x-10">
                <!-- Logo -->
                <a href="{{ route('dashboard') }}" class="flex items-center space-x-3 group">
                    <div class="w-9 h-9 bg-white text-green-600 flex items-center justify-center rounded-lg font-bold shadow-md group-hover:shadow-lg transition-shadow">
                        🐾
                    </div>
                    <span class="text-lg font-bold text-white">
                        Dieren<span class="text-green-200">asiel</span>
                    </span>
                </a>

                <!-- Menu -->
                <div class="flex items-center space-x-6">
                    <a href="{{ route('news.index') }}"
                       class="text-white hover:text-green-200 font-medium transition px-3 py-2 rounded-lg hover:bg-green-600">
                        Nieuws
                    </a>
                    <a href="{{ route('faq.index') }}"
                       class="text-white hover:text-green-200 font-medium transition px-3 py-2 rounded-lg hover:bg-green-600">
                        FAQ
                    </a>
                    @auth
                        <a href="{{ route('admin.faq.items.index') }}"
                           class="text-green-100 font-semibold hover:text-white transition px-3 py-2 rounded-lg hover:bg-green-600">
                            Admin
                        </a>
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
                            class="px-4 py-2 text-sm font-semibold text-green-700 bg-white hover:bg-green-50 rounded-lg transition shadow hover:shadow-md">
                            Uitloggen
                        </button>
                    </form>
                </div>
            @endauth

        </div>
    </div>
</nav>
