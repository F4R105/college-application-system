{{-- Sidebar --}}
@php
    $steps = ['Payment', 'Personal', 'Academic', 'Courses', 'Declaration', 'Status'];
@endphp

<div x-show="sidebarOpen" x-transition.opacity x-cloak class="fixed inset-0 bg-black/40 backdrop-blur-sm z-40 md:hidden"
    @click="sidebarOpen = false" x-cloak>
</div>

<aside x-show="sidebarOpen || window.innerWidth >= 768" x-transition:enter="transition transform ease-out duration-300"
    x-transition:enter-start="-translate-x-full" x-transition:enter-end="translate-x-0"
    x-transition:leave="transition transform ease-in duration-200" x-transition:leave-start="translate-x-0"
    x-transition:leave-end="-translate-x-full" x-cloak
    class="fixed inset-y-0 left-0 z-50 w-72 bg-indigo-700 dark:bg-indigo-900 shadow-xl flex flex-col md:static md:translate-x-0 md:flex md:w-72"
    @click.away="sidebarOpen = false">

    <div class="h-20 flex items-center justify-center border-b border-indigo-600 dark:border-indigo-800">
        <span class="text-2xl font-bold text-white">Edotech College</span>
    </div>
    
    <nav class="flex-1 px-6 py-8 flex flex-col justify-between">
        {{-- Navigation Links --}}
        <div class="space-y-3">
            @foreach ($steps as $index => $label)
                <a href="{{ route('application.index', ['q' => $index]) }}" @class([
                    'flex items-center px-4 py-3 rounded-xl text-white transition hover:bg-indigo-700',
                    'bg-indigo-600' => true,
                    'bg-orange-500' => $index == $activeStep,
                    'opacity-50 cursor-not-allowed' => $index > $currentStep,
                ])>
                    {{ $label }}
                </a>
            @endforeach
        </div>


        {{-- Footer: Email + Logout --}}
        <div class="pt-6 border-t border-indigo-600 dark:border-indigo-800">
            <div class="flex items-center space-x-2 mb-3">
                <svg class="w-5 h-5 text-indigo-200" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M16 12H8m8 0a4 4 0 00-8 0m8 0v1a4 4 0 01-8 0v-1m8 0a4 4 0 00-8 0" />
                </svg>
                <p class="text-sm text-indigo-100 truncate">{{ auth()->user()->email }}</p>
            </div>

            <form action="{{ route('auth.logout') }}" method="post" onsubmit="return confirm('Are you sure?..')">
                @csrf
                <button type="submit"
                    class="cursor-pointer w-full flex items-center px-4 py-3 rounded-xl text-white bg-red-400 hover:bg-red-600 dark:hover:bg-red-500 transition">
                    <svg class="w-6 h-6 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1" />
                    </svg>
                    Logout
                </button>
            </form>
        </div>
    </nav>
</aside>
