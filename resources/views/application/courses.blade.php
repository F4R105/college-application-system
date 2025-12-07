@php
    $availableCourses = [
        'Diploma in ICT',
        'Diploma in Business Administration',
        'Certificate in Web Development',
        'Certificate in Accounting',
    ]; // Replace with dynamic list if needed
@endphp

<x-app-layout title="Course Selection">
    <x-dashboard-layout heading="Choose Your Courses">

        {{-- Sticky Info (Optional) --}}
        <div class="sticky -top-5 z-40 bg-white dark:bg-gray-800/40 backdrop-blur-xl shadow-xl rounded-xl">
            <div
                class="max-w-4xl mx-auto flex flex-col sm:flex-row items-stretch sm:items-center justify-between gap-6 p-4 sm:p-5">
                <div class="flex-1 bg-gray-50 dark:bg-gray-700 p-4 rounded-xl">
                    <p class="text-xs sm:text-sm text-gray-500 dark:text-gray-400 font-medium uppercase tracking-wide">
                        🎓 Course Selection
                    </p>
                    <p class="text-lg font-bold text-gray-800 dark:text-white mt-2">
                        Choose your preferred courses in order of priority.
                    </p>
                </div>
            </div>
        </div>

        {{-- Course Selection Form --}}
        <form action="{{ route('application.courses') }}" method="POST" class="mt-8 space-y-6 max-w-2xl mx-auto">
            @csrf

            {{-- First Priority --}}
            <div>
                <label for="first_choice" class="block text-sm font-medium text-gray-700 dark:text-gray-300">
                    First Priority <span class="text-red-500">*</span>
                </label>
                <select name="first_choice" id="first_choice"
                    class="mt-2 h-12 px-4 block w-full rounded-md border {{ $errors->has('first_choice') ? 'border-red-500' : 'border-gray-300 dark:border-gray-700' }} dark:bg-gray-900 dark:text-white shadow-sm focus:ring-indigo-500 focus:border-indigo-500"
                    required>
                    <option value="">Select a course</option>
                    @foreach ($availableCourses as $course)
                        <option value="{{ $course }}" {{ old('first_choice') === $course ? 'selected' : '' }}>
                            {{ $course }}
                        </option>
                    @endforeach
                </select>
                @error('first_choice')
                    <p class="text-xs text-red-500 mt-1">{{ $message }}</p>
                @enderror
            </div>

            {{-- Second Priority --}}
            <div>
                <label for="second_choice" class="block text-sm font-medium text-gray-700 dark:text-gray-300">
                    Second Priority <span class="text-red-500">*</span>
                </label>
                <select name="second_choice" id="second_choice"
                    class="mt-2 h-12 px-4 block w-full rounded-md border {{ $errors->has('second_choice') ? 'border-red-500' : 'border-gray-300 dark:border-gray-700' }} dark:bg-gray-900 dark:text-white shadow-sm focus:ring-indigo-500 focus:border-indigo-500"
                    required>
                    <option value="">Select a course</option>
                    @foreach ($availableCourses as $course)
                        <option value="{{ $course }}" {{ old('second_choice') === $course ? 'selected' : '' }}>
                            {{ $course }}
                        </option>
                    @endforeach
                </select>
                @error('second_choice')
                    <p class="text-xs text-red-500 mt-1">{{ $message }}</p>
                @enderror
            </div>

            {{-- Submit --}}
            <div class="flex justify-end">
                <button type="submit"
                    class="px-6 py-3 bg-indigo-600 text-white rounded-md hover:bg-indigo-700 transition">
                    Save & Continue
                </button>
            </div>
        </form>

    </x-dashboard-layout>
</x-app-layout>
