<x-app-layout title="Access Denied">

    <!-- Centered 403 Message -->
    <div class="h-[90vh] flex flex-col items-center justify-center text-center text-gray-700 dark:text-gray-300 px-4">
        <h1 class="text-6xl font-bold text-red-600 dark:text-red-400 mb-4">403</h1>
        <p class="text-xl font-semibold mb-2">Access Denied</p>
        <p class="text-sm mb-6 max-w-md">
            You don’t have permission to view this page. If you believe this is a mistake, please contact your administrator.
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
