<x-app-layout title="Page Expired">

    <!-- Centered 419 Message -->
    <div class="h-[90vh] flex flex-col items-center justify-center text-center text-gray-800 dark:text-gray-300 px-4">
        <h1 class="text-6xl font-bold text-yellow-500 dark:text-yellow-400 mb-4">419</h1>
        <p class="text-xl font-semibold mb-2">Session Expired</p>
        <p class="text-sm mb-6 max-w-md">
            Your session has expired due to inactivity or a missing security token. Please refresh the page or log in again to continue.
        </p>

        <form action="{{ route('auth.logout') }}" method="post">
            @csrf
            <button type="submit"
                class="inline-block px-5 py-2 bg-indigo-600 text-white rounded hover:bg-indigo-700 transition">
                ⬅️ Login
            </button>
        </form>
    </div>

</x-app-layout>
