<x-app-layout title="Personal details">
    <x-dashboard-layout heading="Personal details">
        <section>
            <form action="{{ route('application.personal') }}" method="POST" class="mt-5 space-y-6 max-w-2xl mx-auto">
                @csrf

                {{-- Full Name --}}
                <div>
                    <label class="block text-sm font-medium text-gray-700 dark:text-gray-300">
                        Full Name <span class="text-red-500">*</span>
                    </label>
                    <p class="text-xs text-gray-500 dark:text-gray-400 mb-2">
                        Enter your first, middle, and last name as they appear on official documents.
                    </p>
                    <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
                        <input type="text" name="first_name" placeholder="First Name" value="{{ old('first_name') }}"
                            class="h-12 px-4 rounded-md border {{ $errors->has('first_name') ? 'border-red-500' : 'border-gray-300 dark:border-gray-700' }} dark:bg-gray-900 dark:text-white shadow-sm focus:ring-indigo-500 focus:border-indigo-500"
                            required>
                        <input type="text" name="middle_name" placeholder="Middle Name"
                            value="{{ old('middle_name') }}"
                            class="h-12 px-4 rounded-md border {{ $errors->has('middle_name') ? 'border-red-500' : 'border-gray-300 dark:border-gray-700' }} dark:bg-gray-900 dark:text-white shadow-sm focus:ring-indigo-500 focus:border-indigo-500"
                            required>
                        <input type="text" name="last_name" placeholder="Last Name" value="{{ old('last_name') }}"
                            class="h-12 px-4 rounded-md border {{ $errors->has('last_name') ? 'border-red-500' : 'border-gray-300 dark:border-gray-700' }} dark:bg-gray-900 dark:text-white shadow-sm focus:ring-indigo-500 focus:border-indigo-500"
                            required>
                    </div>
                </div>

                {{-- Gender --}}
                <div>
                    <label for="gender" class="block text-sm font-medium text-gray-700 dark:text-gray-300">
                        Gender <span class="text-red-500">*</span>
                    </label>
                    <p class="text-xs text-gray-500 dark:text-gray-400 mb-2">
                        Select your gender as registered in official records.
                    </p>
                    <select name="gender" id="gender"
                        class="h-12 px-4 block w-full rounded-md border {{ $errors->has('gender') ? 'border-red-500' : 'border-gray-300 dark:border-gray-700' }} dark:bg-gray-900 dark:text-white shadow-sm focus:ring-indigo-500 focus:border-indigo-500"
                        required>
                        <option value="">Choose gender</option>
                        <option value="male" {{ old('gender') === 'male' ? 'selected' : '' }}>Male</option>
                        <option value="female" {{ old('gender') === 'female' ? 'selected' : '' }}>Female</option>
                    </select>
                    @error('gender')
                        <p class="text-xs text-red-500 mt-1">{{ $message }}</p>
                    @enderror
                </div>

                {{-- Phone Number --}}
                <div>
                    <label for="phone_number" class="block text-sm font-medium text-gray-700 dark:text-gray-300">
                        Phone Number <span class="text-red-500">*</span>
                    </label>
                    <p class="text-xs text-gray-500 dark:text-gray-400 mb-2">
                        Enter your Tanzanian mobile number (without leading zero). Example: 712345678
                    </p>
                    <div class="flex items-center space-x-2">
                        <span
                            class="h-12 px-4 flex items-center bg-gray-100 dark:bg-gray-800 text-gray-700 dark:text-gray-300 rounded-md border border-gray-300 dark:border-gray-700">
                            +255
                        </span>
                        <input type="text" name="phone_number" id="phone_number" value="{{ old('phone_number') }}"
                            maxlength="9" pattern="\d{9}"
                            class="h-12 px-4 flex-1 rounded-md border {{ $errors->has('phone_number') ? 'border-red-500' : 'border-gray-300 dark:border-gray-700' }} dark:bg-gray-900 dark:text-white shadow-sm focus:ring-indigo-500 focus:border-indigo-500"
                            required>
                    </div>
                    @error('phone_number')
                        <p class="text-xs text-red-500 mt-1">{{ $message }}</p>
                    @enderror
                </div>

                {{-- National ID --}}
                <div>
                    <label for="national_id" class="block text-sm font-medium text-gray-700 dark:text-gray-300">
                        National ID
                    </label>
                    <p class="text-xs text-gray-500 dark:text-gray-400 mb-2">
                        Optional. Enter your NIDA number if available.
                    </p>
                    <input type="text" name="national_id" id="national_id" value="{{ old('national_id') }}"
                        class="h-12 px-4 block w-full rounded-md border {{ $errors->has('national_id') ? 'border-red-500' : 'border-gray-300 dark:border-gray-700' }} dark:bg-gray-900 dark:text-white shadow-sm focus:ring-indigo-500 focus:border-indigo-500">
                    @error('national_id')
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
        </section>
    </x-dashboard-layout>
</x-app-layout>
