<x-app-layout title="Declaration">
    <x-dashboard-layout heading="Declaration & Final Confirmation">

        <section class="max-w-2xl mx-auto space-y-8 mt-8">

            {{-- Declaration Text --}}
            <div
                class="bg-white dark:bg-gray-900 p-6 rounded-lg shadow border border-gray-200 dark:border-gray-700 space-y-4">
                <h2 class="text-lg font-semibold text-gray-800 dark:text-white">📜 Declaration</h2>
                <p class="text-sm text-gray-700 dark:text-gray-300 leading-relaxed">
                    I hereby declare that the information provided in this application is true and complete to the best
                    of my knowledge. I understand that any false or misleading information may result in the
                    cancellation of my admission or other disciplinary action.
                </p>
                <p class="text-sm text-gray-700 dark:text-gray-300 leading-relaxed">
                    I also acknowledge that submission of this application does not guarantee admission, and that the
                    final decision rests with Edotech College of Technology.
                </p>
            </div>

            {{-- Confirmation Form --}}
            <form action="{{ route('application.declaration') }}" method="POST" class="space-y-6">
                @csrf

                {{-- Checkbox --}}
                <div class="flex items-start">
                    <input type="checkbox" name="agree" id="agree" required
                        class="mt-1 h-5 w-5 text-indigo-600 border-gray-300 rounded focus:ring-indigo-500">
                    <label for="agree" class="ml-3 text-sm text-gray-700 dark:text-gray-300">
                        I confirm that I have read and agree to the declaration above.
                    </label>
                </div>

                {{-- Submit --}}
                <div class="text-right">
                    <button type="submit"
                        class="inline-flex items-center px-6 py-3 bg-indigo-600 text-white text-sm font-semibold rounded-lg shadow hover:bg-indigo-700 transition">
                        Submit Application
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 ml-2" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7" />
                        </svg>
                    </button>
                </div>
            </form>

        </section>

    </x-dashboard-layout>
</x-app-layout>
d