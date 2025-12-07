@php
    $application = auth()->user()->application;
    $status = true ? 'Submitted' : 'Pending';
@endphp

<x-app-layout title="Application Status">
    <x-dashboard-layout heading="Application Status">

        <section class="max-w-2xl mx-auto space-y-8 mt-8">

            {{-- Status Card --}}
            <div class="bg-white dark:bg-gray-900 p-6 rounded-lg shadow border border-gray-200 dark:border-gray-700">
                <h2 class="text-lg font-semibold text-gray-800 dark:text-white mb-4">📌 Current Status</h2>
                <p class="text-sm text-gray-700 dark:text-gray-300">
                    Your application is currently:
                </p>
                <span
                    class="inline-block mt-2 px-4 py-1.5 rounded-full text-sm font-bold tracking-wide
                    {{ $status === 'Submitted' ? 'bg-green-500 text-white' : 'bg-yellow-500 text-white' }}">
                    {{ $status }}
                </span>
            </div>

            {{-- Summary Details --}}
            <div
                class="bg-white dark:bg-gray-900 p-6 rounded-lg shadow border border-gray-200 dark:border-gray-700 space-y-4">
                <h3 class="text-md font-bold text-indigo-700 dark:text-indigo-400">📄 Application Summary</h3>
                <ul class="text-sm text-gray-700 dark:text-gray-300 space-y-1">
                    <li><strong>Name:</strong> Faraji Mussa</li>
                    <li><strong>Phone:</strong> +255712345678</li>
                    <li><strong>Form Four Index:</strong> S1234/0056/2018</li>
                    <li><strong>Form Six Index:</strong> S1234/0099/2021</li>
                    <li><strong>First Choice:</strong> Diploma in ICT</li>
                    <li><strong>Second Choice:</strong> Certificate in Web Development</li>
                </ul>
            </div>


            {{-- Final Actions --}}
            <div class="text-right pt-4">
                @if ($status === 'Submitted')
                    <button onclick="window.print()"
                        class="inline-flex items-center px-5 py-2.5 bg-indigo-600 text-white text-sm font-semibold rounded-lg shadow hover:bg-indigo-700 transition">
                        Print Confirmation
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 ml-2" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M6 9v6h12V9M6 9V4h12v5M6 15v5h12v-5" />
                        </svg>
                    </button>
                @else
                    <a href="#"
                        class="inline-flex items-center px-5 py-2.5 bg-red-600 text-white text-sm font-semibold rounded-lg shadow hover:bg-red-700 transition">
                        Resume Application
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 ml-2" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M3 10h11M9 6l-6 6 6 6" />
                        </svg>
                    </a>
                @endif
            </div>

        </section>

    </x-dashboard-layout>
</x-app-layout>
