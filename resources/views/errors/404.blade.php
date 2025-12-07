<x-app-layout title="Page not Found">


    <!-- Centered 404 Message -->
    <div class="h-[90vh] flex flex-col items-center justify-center text-center text-gray-700 dark:text-gray-300">
        <h1 class="text-6xl font-bold text-indigo-600 dark:text-indigo-400 mb-4">404</h1>
        <p class="text-xl font-semibold mb-2">Sorry, Page Not Found</p>
        <p class="text-sm mb-6 max-w-md">The page you’re looking for doesn’t exist or may have been moved.</p>

        <form action="{{ route('auth.logout') }}" method="post">
            @csrf
            <button type="submit"
                class="inline-block px-5 py-2 bg-indigo-600 text-white rounded hover:bg-indigo-700 transition">
                ⬅️ Login
            </button>
        </form>
    </div>

</x-app-layout>
