<div x-data="{ sidebarOpen: window.innerWidth >= 768 }" class="flex h-screen bg-gray-50 dark:bg-gray-950">

    <x-sidebar />

    {{-- Main Content --}}
    <div class="flex-1 flex flex-col overflow-hidden">
        <header class="bg-white dark:bg-gray-800 shadow px-6 py-4 flex items-center justify-between">
            <h1 class="text-xl font-bold text-gray-900 dark:text-white">Step {{ $activeStep + 1 }}:
                {{ $heading }}</h1>
            <button @click="sidebarOpen = !sidebarOpen"
                class="md:hidden text-gray-700 dark:text-white focus:outline-none">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                </svg>
            </button>
        </header>

        <main class="flex-1 overflow-y-auto space-y-10 p-6">
            {{ $slot }}
        </main>
    </div>
</div>
