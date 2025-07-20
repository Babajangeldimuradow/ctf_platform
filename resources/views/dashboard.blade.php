<x-app-layout>
    <x-slot name="header">
        <h2 class="text-4xl font-black text-slate-800 dark:text-white tracking-tight">
            Dolandyryş Paneli
        </h2>
    </x-slot>

    <div class="py-10 px-6 lg:px-10 space-y-16 bg-gradient-to-br from-gray-50 via-white to-gray-100 dark:from-gray-900 dark:via-gray-800 dark:to-gray-900 rounded-3xl">

        <!-- Hoş geldiňiz bölümi -->
        <div class="text-center space-y-3">
            <h3 class="text-3xl font-extrabold text-indigo-600 dark:text-indigo-400">Hoş geldiňiz, {{ Auth::user()->name }} 👋</h3>
            <p class="text-gray-600 dark:text-gray-300 text-lg">Programmanyňyzyň maglumatlaryny, ulanyjylary we ulgam gözlegini dolandyryň.</p>
        </div>

        <!-- Statistik kartlar -->
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-10">
            @foreach([
                ['title' => 'Onlaýn ulanyjylar', 'value' => 76, 'color' => 'from-sky-500 to-blue-600'],
                ['title' => 'Serwer ýükü', 'value' => '42%', 'color' => 'from-pink-500 to-rose-600'],
                ['title' => 'Ýerine ýetirilmeli işler', 'value' => 12, 'color' => 'from-green-500 to-emerald-600'],
            ] as $card)
                <div class="bg-gradient-to-r {{ $card['color'] }} text-white rounded-2xl p-6 shadow-lg hover:scale-105 transition-transform duration-300">
                    <p class="text-sm font-medium uppercase tracking-wider">{{ $card['title'] }}</p>
                    <p class="text-4xl font-bold mt-2">{{ $card['value'] }}</p>
                </div>
            @endforeach
        </div>

        <!-- Çalt aksiyalar -->
        <div class="bg-white dark:bg-gray-800 rounded-2xl p-8 shadow-lg">
            <h4 class="text-2xl font-bold text-gray-800 dark:text-white mb-6">Çalt Hereketler</h4>
            <div class="flex flex-wrap gap-4">
                <button class="bg-indigo-600 hover:bg-indigo-700 text-white font-semibold px-5 py-3 rounded-xl transition-all duration-200">
                    Ulanyjy goş
                </button>
                <button class="bg-gray-200 dark:bg-gray-700 hover:bg-gray-300 dark:hover:bg-gray-600 text-gray-800 dark:text-white font-semibold px-5 py-3 rounded-xl">
                    Sazlamalar
                </button>
                <button class="bg-pink-500 hover:bg-pink-600 text-white font-semibold px-5 py-3 rounded-xl">
                    Loglary arassala
                </button>
            </div>
        </div>

        <!-- Goşmaça bölümler -->
        <div class="grid grid-cols-1 lg:grid-cords-2 gap-10">
            <!-- Soňky işler -->
            <div class="bg-white dark:bg-gray-800 rounded-2xl p-8 shadow-lg">
                <h4 class="text-2xl font-bold text-gray-800 dark:text-white mb-6">Soňky işler</h4>
                <div class="space-y-4">
                    @foreach([
                        ['title' => 'Täze ulanyjy goşuldy', 'time' => '10 minut öň', 'color' => 'bg-green-100 dark:bg-green-900 text-green-800 dark:text-green-200'],
                        ['title' => 'Maglumat täzelendi', 'time' => '30 minut öň', 'color' => 'bg-blue-100 dark:bg-blue-900 text-blue-800 dark:text-blue-200'],
                        ['title' => 'Howpsuzlyk uýgurdysy', 'time' => '1 sagat öň', 'color' => 'bg-yellow-100 dark:bg-yellow-900 text-yellow-800 dark:text-yellow-200'],
                    ] as $activity)
                    <div class="flex items-start">
                        <div class="flex-shrink-0 h-3 w-3 rounded-full mt-1.5 {{ $activity['color'] }}"></div>
                        <div class="ml-4">
                            <p class="text-gray-800 dark:text-gray-200 font-medium">{{ $activity['title'] }}</p>
                            <p class="text-gray-500 dark:text-gray-400 text-sm">{{ $activity['time'] }}</p>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>

            <!-- Ulamlar -->
            <div class="bg-white dark:bg-gray-800 rounded-2xl p-8 shadow-lg">
                <h4 class="text-2xl font-bold text-gray-800 dark:text-white mb-6">Gerekli Ulamlar</h4>
                <div class="grid grid-cols-2 gap-4">
                    <a href="#" class="p-4 bg-gray-100 dark:bg-gray-700 rounded-lg hover:bg-gray-200 dark:hover:bg-gray-600 transition-colors">
                        <div class="text-indigo-600 dark:text-indigo-400 mb-2">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6"></path>
                            </svg>
                        </div>
                        <p class="font-medium text-gray-800 dark:text-gray-200">Täze taslama</p>
                    </a>
                    <a href="#" class="p-4 bg-gray-100 dark:bg-gray-700 rounded-lg hover:bg-gray-200 dark:hover:bg-gray-600 transition-colors">
                        <div class="text-green-600 dark:text-green-400 mb-2">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2"></path>
                            </svg>
                        </div>
                        <p class="font-medium text-gray-800 dark:text-gray-200">Habar ýaz</p>
                    </a>
                </div>
            </div>
        </div>

    </div>
</x-app-layout>