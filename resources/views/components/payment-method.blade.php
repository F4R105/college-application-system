@props(['name'])

<div class="bg-white dark:bg-gray-900 p-6 rounded-lg shadow border border-gray-200 dark:border-gray-700">
    <h3 class="text-md font-bold text-indigo-700 dark:text-indigo-400">{{ $name }}</h3>
    <ol class="list-decimal list-inside text-sm text-gray-700 dark:text-gray-300 mt-2 space-y-1">
        {{ $slot }}
    </ol>
</div>
