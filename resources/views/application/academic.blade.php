<x-app-layout title="Academic Information">
    <x-dashboard-layout heading="Academic Information">

        <section class="max-w-2xl mx-auto space-y-10 mt-8">

            {{-- Form Four Section --}}
            <div class="space-y-6">
                <h2 class="text-lg font-semibold text-gray-800 dark:text-white">📘 Form Four (CSEE)</h2>

                <form action="#" method="POST" class="space-y-4">
                    @csrf
                    <label for="form_four_index" class="block text-sm font-medium text-gray-700 dark:text-gray-300">
                        Index Number <span class="text-red-500">*</span>
                    </label>
                    <input type="text" name="form_four_index" id="form_four_index" placeholder="S1234/0056/2018"
                        class="h-12 px-4 w-full rounded-md border border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-white shadow-sm focus:ring-indigo-500 focus:border-indigo-500"
                        required>

                    <div class="text-right">
                        <button type="submit"
                            class="px-5 py-2.5 bg-indigo-600 text-white text-sm font-semibold rounded-lg shadow hover:bg-indigo-700 transition">
                            Fetch Form Four Results
                        </button>
                    </div>
                </form>

                {{-- Mock Results --}}
                <div
                    class="bg-white dark:bg-gray-900 p-6 rounded-lg shadow border border-gray-200 dark:border-gray-700">
                    <h4 class="text-sm font-bold text-indigo-700 dark:text-indigo-400 mb-2">Retrieved Results</h4>
                    <ul class="text-sm text-gray-700 dark:text-gray-300 space-y-1">
                        <li><strong>Index:</strong> S1234/0056/2018</li>
                        <li><strong>Name:</strong> Faraji Mussa</li>
                        <li><strong>Division:</strong> II</li>
                        <li><strong>Subjects:</strong> B, C, C, D, B, A</li>
                    </ul>
                </div>
            </div>

            {{-- Form Six Section --}}
            <div class="space-y-6">
                <h2 class="text-lg font-semibold text-gray-800 dark:text-white">📗 Form Six (ACSEE)</h2>

                <form action="#" method="POST" class="space-y-4">
                    @csrf
                    <label for="form_six_index" class="block text-sm font-medium text-gray-700 dark:text-gray-300">
                        Index Number <span class="text-red-500">*</span>
                    </label>
                    <input type="text" name="form_six_index" id="form_six_index" placeholder="S1234/0099/2021"
                        class="h-12 px-4 w-full rounded-md border border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-white shadow-sm focus:ring-indigo-500 focus:border-indigo-500"
                        required>

                    <div class="text-right">
                        <button type="submit"
                            class="px-5 py-2.5 bg-indigo-600 text-white text-sm font-semibold rounded-lg shadow hover:bg-indigo-700 transition">
                            Fetch Form Six Results
                        </button>
                    </div>
                </form>

                {{-- Mock Results --}}
                <div
                    class="bg-white dark:bg-gray-900 p-6 rounded-lg shadow border border-gray-200 dark:border-gray-700">
                    <h4 class="text-sm font-bold text-indigo-700 dark:text-indigo-400 mb-2">Retrieved Results</h4>
                    <ul class="text-sm text-gray-700 dark:text-gray-300 space-y-1">
                        <li><strong>Index:</strong> S1234/0099/2021</li>
                        <li><strong>Name:</strong> Faraji Mussa</li>
                        <li><strong>Points:</strong> 13</li>
                        <li><strong>Subjects:</strong> E, C, D</li>
                    </ul>
                </div>
            </div>

            <div class="text-right pt-4">
                <form action="{{ route('application.academic') }}" method="POST">
                    @csrf
                    <button type="submit"
                        class="inline-flex items-center px-5 py-2.5 bg-indigo-600 text-white text-sm font-semibold rounded-lg shadow hover:bg-indigo-700 transition">
                        Continue to Course Selection
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 ml-2" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7" />
                        </svg>
                    </button>
                </form>
            </div>


        </section>

    </x-dashboard-layout>
</x-app-layout>
