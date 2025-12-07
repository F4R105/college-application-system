<x-app-layout title="Welcome">
    {{-- Main Container --}}
    <div class="min-h-screen flex flex-col bg-gray-50 dark:bg-gray-900 text-gray-800 dark:text-gray-200">

        {{-- Header with Navigation --}}
        <header class="w-full bg-white dark:bg-gray-800 shadow-md sticky top-0 z-50">
            <nav class="container mx-auto px-4 sm:px-6 lg:px-8 py-4 flex justify-between items-center">
                <a href="#" class="text-2xl font-bold text-blue-600 dark:text-blue-500">
                    Edotech
                </a>
                <div>
                    <a href="{{ route('auth.login') }}"
                        class="px-5 py-2 rounded-lg bg-blue-600 hover:bg-blue-700 text-white font-semibold transition">
                        Log In
                    </a>
                </div>
            </nav>
        </header>

        {{-- Hero Section with Image --}}
        <main class="flex-grow">
            <div class="bg-blue-600 dark:bg-blue-700">
                <div class="container mx-auto">
                    {{-- Mobile: Image with Content Overlay --}}
                    <div class="relative h-[80vh] flex md:hidden items-center justify-center overflow-hidden">
                        <img src="{{ asset('images/hero.png') }}" alt="Students in tech lab"
                            class="absolute inset-0 w-full h-full object-cover opacity-30">
                        <div class="absolute inset-0 bg-gradient-to-b from-blue-700/60 to-blue-900/80"></div>

                        <div class="relative z-10 text-center text-white px-6">
                            <h1 class="text-4xl font-extrabold mb-4 tracking-tight">
                                Your Future in Tech Starts Here
                            </h1>
                            <p class="text-lg font-light max-w-md mx-auto mb-6">
                                Apply online to Edotech College of Technology and join the next generation of
                                innovators.
                            </p>
                            <div class="flex flex-col sm:flex-row justify-center gap-4">
                                <a href="{{ route('register') }}"
                                    class="px-6 py-3 rounded-full bg-green-500 hover:bg-green-600 text-white font-bold text-lg transition transform hover:scale-105 shadow-lg">
                                    Start Application
                                </a>
                                <a href="{{ route('login') }}"
                                    class="px-6 py-3 rounded-full bg-white text-blue-700 hover:bg-gray-100 font-semibold text-lg transition transform hover:scale-105 shadow-lg">
                                    Log In
                                </a>
                            </div>
                        </div>
                    </div>

                    {{-- Desktop: Split Layout with Image on Left --}}
                    <div class="hidden md:grid md:grid-cols-2 lg:h-[90vh] items-center">
                        {{-- Content Column --}}
                        <div class="p-12 lg:p-20 text-white dark:text-gray-200">
                            <h1 class="text-4xl lg:text-5xl font-extrabold mb-4 tracking-tight leading-tight">
                                Your Future in Tech Starts Here
                            </h1>
                            <p class="text-lg lg:text-xl font-light mb-6">
                                Apply online to Edotech College of Technology and join the next generation of
                                innovators.
                            </p>
                            <div class="flex flex-col sm:flex-row gap-4">
                                <a href="{{ route('register') }}"
                                    class="px-6 py-3 rounded-full bg-green-500 hover:bg-green-600 text-white font-bold text-lg transition transform hover:scale-105 shadow-lg">
                                    Start Application
                                </a>
                                <a href="{{ route('login') }}"
                                    class="px-6 py-3 rounded-full bg-white text-blue-700 hover:bg-gray-100 font-semibold text-lg transition transform hover:scale-105 shadow-lg">
                                    Log In
                                </a>
                            </div>
                        </div>

                        {{-- Image Column --}}
                        <div class="p-5 h-full w-full relative overflow-hidden">
                            <img src="{{ asset('images/hero.png') }}" alt="Students in tech lab"
                                class="h-full w-full object-cover rounded-xl">
                        </div>
                    </div>
                </div>
            </div>


            {{-- Application Process Section --}}
            <section class="py-16 bg-gray-100 dark:bg-gray-900">
                <div class="container mx-auto px-4 sm:px-6 lg:px-8 max-w-4xl">
                    <h2 class="text-3xl font-bold text-center mb-8 text-gray-800 dark:text-white">How the Online
                        Application Works</h2>
                    <div class="grid grid-cols-1 md:grid-cols-3 gap-8 text-center">
                        <div class="p-6 bg-white dark:bg-gray-800 rounded-lg shadow-lg">
                            <span class="text-blue-600 dark:text-blue-400 text-4xl mb-4 block">1</span>
                            <h3 class="text-xl font-semibold mb-2 text-gray-800 dark:text-white">Create an Account</h3>
                            <p class="text-gray-600 dark:text-gray-400">Register with your email and set up a secure
                                password to begin your application. You'll need a valid email to receive important
                                updates.</p>
                        </div>
                        <div class="p-6 bg-white dark:bg-gray-800 rounded-lg shadow-lg">
                            <span class="text-blue-600 dark:text-blue-400 text-4xl mb-4 block">2</span>
                            <h3 class="text-xl font-semibold mb-2 text-gray-800 dark:text-white">Fill out the Form</h3>
                            <p class="text-gray-600 dark:text-gray-400">Enter your personal details, academic history,
                                and program choices. You'll need to have your **Form IV index number** and
                                **certifications** ready for submission.</p>
                        </div>
                        <div class="p-6 bg-white dark:bg-gray-800 rounded-lg shadow-lg">
                            <span class="text-blue-600 dark:text-blue-400 text-4xl mb-4 block">3</span>
                            <h3 class="text-xl font-semibold mb-2 text-gray-800 dark:text-white">Pay & Submit</h3>
                            <p class="text-gray-600 dark:text-gray-400">Finalize your application by paying the
                                non-refundable fee. A unique **Control Number** will be generated for payment.</p>
                        </div>
                    </div>
                </div>
            </section>

            {{-- Payment Gateways Section --}}
            <section class="py-16 bg-gray-50 dark:bg-gray-900">
                <div class="container mx-auto px-4 sm:px-6 lg:px-8 max-w-4xl text-center">
                    <h2 class="text-3xl font-bold text-gray-800 dark:text-white mb-6">Secure Payment Gateways</h2>
                    <p class="text-lg text-gray-600 dark:text-gray-400 mb-8">We use a secure Government Electronic
                        Payment Gateway (GEPG) to ensure all payments are safe and transparent. You can pay your
                        application fee through:</p>
                    <div class="flex flex-wrap justify-center items-center gap-10">
                        @foreach ([['src' => 'M-pesa.png', 'alt' => 'M-Pesa logo'], ['src' => 'Mixx_by_Yas.jpg', 'alt' => 'Mixx by Yas logo'], ['src' => 'Airtel money.jpg', 'alt' => 'Airtel Money logo'], ['src' => 'Nmb.jpg', 'alt' => 'NMB Bank logo']] as $logo)
                            <div
                                class="w-25 h-25 rounded-xl overflow-hidden bg-white shadow flex items-center justify-center">
                                <img src="{{ asset('images/logos/' . $logo['src']) }}" alt="{{ $logo['alt'] }}"
                                    class="object-cover w-full h-full" />
                            </div>
                        @endforeach
                    </div>

                </div>
            </section>
        </main>

        <footer class="bg-gray-500 dark:bg-black text-gray-800 dark:text-gray-400 py-12">
            <div class="container mx-auto px-4 sm:px-6 lg:px-8 flex flex-col sm:flex-row sm:justify-between gap-10">

                {{-- College Info --}}
                <div>
                    <h3 class="text-xl font-bold text-white mb-3">🎓 Edotech College</h3>
                    <p class="text-sm leading-relaxed max-w-md">
                        A center of excellence in technical education, located in Makoka, Dar es Salaam. We prepare
                        students for real-world innovation and impact.
                    </p>
                    <p class="mt-4 text-xs text-gray-500">© {{ date('Y') }} Edotech College of Technology. All
                        rights reserved.</p>
                </div>

                <div class="flex gap-10">
                    {{-- Navigation --}}
                    <div>
                        <h4 class="text-lg font-semibold text-white mb-3">Quick Links</h4>
                        <ul class="space-y-2 text-sm">
                            <li><a href="{{ route('auth.register') }}" class="hover:text-white transition">📝 Start
                                    Application</a></li>
                            <li><a href="{{ route('login') }}" class="hover:text-white transition">🔐 Log In</a></li>
                            <li><a href="#" class="hover:text-white transition">📘 Application
                                    Help</a></li>
                            <li><a href="#" class="hover:text-white transition">🌐 Main Website</a></li>
                        </ul>
                    </div>

                    {{-- Contact Info --}}
                    <div>
                        <h4 class="text-lg font-semibold text-white mb-3">Contact Us</h4>
                        <ul class="space-y-3 text-sm">
                            <li class="flex items-center gap-2">
                                <svg class="w-5 h-5 text-blue-400" fill="none" stroke="currentColor" stroke-width="2"
                                    viewBox="0 0 24 24">
                                    <path d="M16 12a4 4 0 01-8 0m8 0a4 4 0 00-8 0m8 0v1a4 4 0 01-8 0v-1m8 0H8" />
                                </svg>
                                <a href="mailto:admissions@edotech.ac.tz"
                                    class="hover:text-white">admissions@edotech.ac.tz</a>
                            </li>
                            <li class="flex items-center gap-2">
                                <svg class="w-5 h-5 text-blue-400" fill="none" stroke="currentColor" stroke-width="2"
                                    viewBox="0 0 24 24">
                                    <path
                                        d="M3 5h2a2 2 0 012 2v0a2 2 0 01-2 2H3v10h18V9h-2a2 2 0 01-2-2v0a2 2 0 012-2h2" />
                                </svg>
                                <a href="tel:+255712345678" class="hover:text-white">+255 712 345 678</a>
                            </li>
                            <li class="flex items-center gap-2">
                                <svg class="w-5 h-5 text-blue-400" fill="none" stroke="currentColor"
                                    stroke-width="2" viewBox="0 0 24 24">
                                    <path d="M12 2a10 10 0 00-7.07 17.07A10 10 0 0012 2z" />
                                </svg>
                                Makoka, Dar es Salaam
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </footer>


    </div>
</x-app-layout>
