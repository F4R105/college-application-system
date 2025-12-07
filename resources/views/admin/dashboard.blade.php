<x-app-layout title="New Dashboard">
    <div class="flex h-screen bg-gray-50 dark:bg-gray-950">
        {{-- Sidebar --}}
        <aside class="w-72 bg-indigo-700 dark:bg-indigo-900 shadow-xl flex flex-col">
            <div class="h-20 flex items-center justify-center border-b border-indigo-600 dark:border-indigo-800">
                <a href="#" class="text-3xl font-extrabold text-white">Nexlify Admin</a>
            </div>
            <nav class="flex-1 py-8 space-y-3 px-6">
                <a href="#"
                    class="flex items-center px-4 py-3 rounded-xl bg-indigo-600 dark:bg-indigo-800 text-white font-medium hover:bg-indigo-500 dark:hover:bg-indigo-700 transition">
                    <svg class="w-6 h-6 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                        xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6">
                        </path>
                    </svg>
                    Dashboard
                </a>
                <a href="#"
                    class="flex items-center px-4 py-3 rounded-xl text-white hover:bg-indigo-600 dark:hover:bg-indigo-800 transition">
                    <svg class="w-6 h-6 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                        xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z">
                        </path>
                    </svg>
                    Applications
                </a>
                <a href="#"
                    class="flex items-center px-4 py-3 rounded-xl text-white hover:bg-indigo-600 dark:hover:bg-indigo-800 transition">
                    <svg class="w-6 h-6 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                        xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z">
                        </path>
                    </svg>
                    Users
                </a>
                <form action="{{ route('auth.logout') }}" method="post">
                    @csrf
                    <button type="submit"
                        class="w-full flex items-center px-4 py-3 rounded-xl text-white hover:bg-indigo-600 dark:hover:bg-indigo-800 transition">
                        <svg class="w-6 h-6 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                            xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1">
                            </path>
                        </svg>
                        Logout
                    </button>
                </form>
            </nav>
        </aside>

        {{-- Main Content --}}
        <div class="flex-1 flex flex-col overflow-hidden">
            <header class="bg-white dark:bg-gray-800 shadow-md px-6 py-4 flex items-center justify-end">
                {{-- <h1 class="text-2xl font-bold text-gray-900 dark:text-white">Application Overview</h1> --}}
                <div class="relative flex items-center space-x-4">
                    <div class="text-right">
                        <p class="text-sm font-semibold text-gray-900 dark:text-white">{{ auth()->user()->name }}</p>
                        <p class="text-xs text-gray-500 dark:text-gray-400">{{ auth()->user()->role ?? 'Admin' }}</p>
                    </div>
                    <button class="rounded-full focus:outline-none focus:ring-2 focus:ring-indigo-500">
                        <img class="h-10 w-10 rounded-full object-cover"
                            src="https://ui-avatars.com/api/?name={{ auth()->user()->name }}" alt="User avatar">
                    </button>
                </div>
            </header>

            <main class="flex-1 overflow-y-auto bg-gray-50 dark:bg-gray-950 p-6">
                <div class="max-w-7xl mx-auto">
                    <h2 class="text-2xl font-bold text-gray-900 dark:text-white mb-6">Pending Applications</h2>
                    <div class="grid gap-6 md:grid-cols-2 lg:grid-cols-3">
                        {{-- Card-based layout for applications --}}
                        <div class="bg-white dark:bg-gray-800 rounded-xl shadow-md p-6">
                            <h3 class="text-lg font-semibold text-gray-900 dark:text-white">Jane Doe</h3>
                            <p class="text-sm text-gray-500 dark:text-gray-400">Computer Science</p>
                            <div class="mt-2">
                                <span
                                    class="inline-flex items-center px-3 py-1 text-xs font-medium rounded-full bg-amber-100 text-amber-800 dark:bg-amber-800 dark:text-amber-100">
                                    Pending
                                </span>
                            </div>
                            <div class="mt-4 flex space-x-3">
                                <a href="#"
                                    class="text-indigo-600 hover:text-indigo-800 font-medium text-sm">View</a>
                                <a href="#"
                                    class="text-green-600 hover:text-green-800 font-medium text-sm">Approve</a>
                                <a href="#" class="text-red-600 hover:text-red-800 font-medium text-sm">Reject</a>
                            </div>
                        </div>
                        <div class="bg-white dark:bg-gray-800 rounded-xl shadow-md p-6">
                            <h3 class="text-lg font-semibold text-gray-900 dark:text-white">John Smith</h3>
                            <p class="text-sm text-gray-500 dark:text-gray-400">Mechanical Engineering</p>
                            <div class="mt-2">
                                <span
                                    class="inline-flex items-center px-3 py-1 text-xs font-medium rounded-full bg-amber-100 text-amber-800 dark:bg-amber-800 dark:text-amber-100">
                                    Pending
                                </span>
                            </div>
                            <div class="mt-4 flex space-x-3">
                                <a href="#"
                                    class="text-indigo-600 hover:text-indigo-800 font-medium text-sm">View</a>
                                <a href="#"
                                    class="text-green-600 hover:text-green-800 font-medium text-sm">Approve</a>
                                <a href="#" class="text-red-600 hover:text-red-800 font-medium text-sm">Reject</a>
                            </div>
                        </div>
                        <div class="bg-white dark:bg-gray-800 rounded-xl shadow-md p-6">
                            <h3 class="text-lg font-semibold text-gray-900 dark:text-white">Alice Johnson</h3>
                            <p class="text-sm text-gray-500 dark:text-gray-400">Business Administration</p>
                            <div class="mt-2">
                                <span
                                    class="inline-flex items-center px-3 py-1 text-xs font-medium rounded-full bg-amber-100 text-amber-800 dark:bg-amber-800 dark:text-amber-100">
                                    Pending
                                </span>
                            </div>
                            <div class="mt-4 flex space-x-3">
                                <a href="#"
                                    class="text-indigo-600 hover:text-indigo-800 font-medium text-sm">View</a>
                                <a href="#"
                                    class="text-green-600 hover:text-green-800 font-medium text-sm">Approve</a>
                                <a href="#" class="text-red-600 hover:text-red-800 font-medium text-sm">Reject</a>
                            </div>
                        </div>
                    </div>
                </div>
            </main>
        </div>
    </div>
</x-app-layout>
