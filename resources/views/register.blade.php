<x-app-layout title="Registration">
    <div class="min-h-screen flex flex-col md:flex-row">

        {{-- Left Column: Hidden on Mobile, Shown on Desktop --}}
        <div class="hidden md:flex md:w-1/2 flex-col justify-center items-center p-8 lg:p-12 bg-blue-600 dark:bg-blue-700 text-white">
            <div class="text-center max-w-xl">
                <h1 class="text-3xl lg:text-5xl font-extrabold mb-4 leading-tight tracking-wide">Edotech College of Technology</h1>
                <p class="text-base lg:text-lg font-light leading-relaxed mb-6 opacity-90">
                    Create an account to begin your journey with Edotech. Our application system is fast, secure, and designed to guide you every step of the way.
                </p>
                <div class="mt-8 space-y-4">
                    <p class="text-white text-lg font-bold mb-2">Already have an account?</p>
                    <a href="{{ route('auth.login') }}"
                       class="inline-block py-3 px-8 bg-green-500 hover:bg-green-600 text-white font-bold rounded-full text-center transition-all duration-300 transform hover:scale-105 shadow-lg hover:shadow-xl">
                        Log In
                    </a>
                </div>
            </div>
        </div>

        {{-- Right Column: Registration Form (Full Width on Mobile, Half on Desktop) --}}
        <div class="w-full h-screen md:w-1/2 flex flex-col justify-center p-8 sm:p-12 bg-gray-50 dark:bg-gray-800">
            <div class="max-w-sm w-full mx-auto p-6 md:p-0">
                <div class="text-center md:hidden mb-8">
                    <h1 class="text-3xl font-bold text-blue-600 dark:text-blue-500">Edotech</h1>
                </div>
                <h2 class="text-2xl sm:text-3xl font-bold text-gray-800 dark:text-white mb-8 text-center">Create Your Account</h2>
                <form action="{{ route('auth.register') }}" method="POST" class="space-y-6">
                    @csrf
                    <div>
                        <label for="email" class="block text-sm font-semibold text-gray-700 dark:text-gray-300 mb-1">Email</label>
                        <input type="email" name="email" id="email" placeholder="johndoe@example.com"
                            class="w-full px-4 py-2 border border-gray-300 dark:border-gray-600 rounded-lg bg-white dark:bg-gray-700 text-gray-900 dark:text-white placeholder-gray-400 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent transition">
                        @error('email')
                            <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                        @enderror
                    </div>
                    <div>
                        <label for="password" class="block text-sm font-semibold text-gray-700 dark:text-gray-300 mb-1">Password</label>
                        <input type="password" name="password" id="password" placeholder="••••••••"
                            class="w-full px-4 py-2 border border-gray-300 dark:border-gray-600 rounded-lg bg-white dark:bg-gray-700 text-gray-900 dark:text-white placeholder-gray-400 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent transition">
                        @error('password')
                            <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                        @enderror
                    </div>
                    <div>
                        <label for="password_confirmation" class="block text-sm font-semibold text-gray-700 dark:text-gray-300 mb-1">Confirm Password</label>
                        <input type="password" name="password_confirmation" id="password_confirmation" placeholder="••••••••"
                            class="w-full px-4 py-2 border border-gray-300 dark:border-gray-600 rounded-lg bg-white dark:bg-gray-700 text-gray-900 dark:text-white placeholder-gray-400 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent transition">
                        @error('password')
                            <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                        @enderror
                    </div>
                    <button type="submit"
                        class="w-full py-2.5 px-4 bg-blue-600 hover:bg-blue-700 text-white font-semibold rounded-lg transition-all duration-300 transform hover:scale-105 shadow-lg hover:shadow-xl">
                        Register
                    </button>
                    <div class="mt-6 text-center">
                        <p class="text-sm text-gray-600 dark:text-gray-400">
                            Already have an account? <a href="{{ route('auth.login') }}" class="font-bold underline text-blue-600 hover:text-blue-700">Log In</a>
                        </p>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>