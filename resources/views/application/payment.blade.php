@php
    $isPaid = true;
    $gepgNumber = null;
@endphp

<x-app-layout title="Application Payment">
    <x-dashboard-layout heading="Application Payment">

        {{-- Sticky GEPG Info --}}
        <div class="sticky -top-5 z-40 bg-white dark:bg-gray-800/40 backdrop-blur-xl shadow-xl rounded-xl">
            <div
                class="max-w-4xl mx-auto flex flex-col sm:flex-row items-stretch sm:items-center justify-between gap-6 p-4 sm:p-5">

                {{-- GEPG Control Number --}}
                <div class="flex-1 flex flex-col justify-center bg-gray-50 dark:bg-gray-700 p-4 rounded-xl">
                    <p class="text-xs sm:text-sm text-gray-500 dark:text-gray-400 font-medium uppercase tracking-wide">
                        <span class="mr-1.5 text-indigo-500">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 inline-block" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M3 10h18M7 15h1m4 0h1m-7 4h12a3 3 0 003-3V8a3 3 0 00-3-3H6a3 3 0 00-3 3v8a3 3 0 003 3z" />
                            </svg>
                        </span>
                        GEPG Control Number
                    </p>
                    <div class="flex items-center mt-2">
                        <p class="text-xl sm:text-2xl font-extrabold text-gray-800 dark:text-white break-words">
                            {{ $gepgNumber ?? 'N/A' }}
                        </p>
                        <button onclick="copyToClipboard('{{ $gepgNumber }}')"
                            class="ml-3 text-gray-500 hover:text-gray-700 dark:text-gray-400 dark:hover:text-gray-200 transition-colors">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20"
                                fill="currentColor">
                                <path d="M8 3a1 1 0 011-1h2a1 1 0 110 2H9a1 1 0 01-1-1z" />
                                <path
                                    d="M6 3a2 2 0 00-2 2v11a2 2 0 002 2h8a2 2 0 002-2V5a2 2 0 00-2-2 3 3 0 01-3 3H9a3 3 0 01-3-3z" />
                            </svg>
                        </button>
                    </div>
                </div>

                {{-- Payment Status --}}
                <div
                    class="flex-1 flex flex-col justify-center text-left sm:text-right bg-gray-50 dark:bg-gray-700 p-4 rounded-xl">
                    <p class="text-xs sm:text-sm text-gray-500 dark:text-gray-400 font-medium uppercase tracking-wide">
                        <span class="mr-1.5 text-indigo-500">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 inline-block" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 018.382 3.049A12.01 12.01 0 0121.059 12a12.01 12.01 0 01-1.399 5.618A11.955 11.955 0 0112 21.059 11.955 11.955 0 013.618 17.016 12.01 12.01 0 012.944 12c0-2.898.81-5.642 2.374-8.016z" />
                            </svg>
                        </span>
                        Payment Status
                    </p>
                    <div class="mt-2">
                        <span
                            class="inline-block px-4 py-1.5 rounded-full text-sm font-bold tracking-wide
                    {{ $isPaid ? 'bg-green-500 text-white' : 'bg-yellow-500 text-white' }}">
                            {{ $isPaid ? 'Paid' : 'Pending' }}
                        </span>
                    </div>
                </div>
            </div>
        </div>

        {{-- Continue Button (Bottom Placement) --}}
        @if ($isPaid)
            <div class="max-w-4xl mx-auto mt-6 px-4 sm:px-0 text-center sm:text-right">
                <form action="{{ route('application.payment') }}" method="post">
                    @csrf
                    <button type="submit" name="payment_complete"
                        class="cursor-pointer inline-flex items-center px-5 py-2.5 bg-indigo-600 text-white text-sm font-semibold rounded-lg shadow hover:bg-indigo-700 transition">
                        Continue to Personal Details
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 ml-2" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7" />
                        </svg>
                    </button>
                </form>
            </div>
        @else
            <div class="max-w-4xl mx-auto mt-6 px-4 sm:px-0 text-center sm:text-right">
                <button onclick="location.reload()"
                    class="cursor-pointer inline-flex items-center px-5 py-2.5 bg-indigo-600 text-white text-sm font-semibold rounded-lg shadow hover:bg-indigo-700 transition">
                    Refresh Page
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 ml-2" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M4 4v16h16V4H4zm4 4h8v8H8V8z" />
                    </svg>
                </button>
            </div>
        @endif


        <script defer>
            function copyToClipboard(text) {
                navigator.clipboard.writeText(text).then(() => {
                    alert('GEPG Control Number copied to clipboard!');
                }).catch(err => {
                    console.error('Could not copy text: ', err);
                });
            }
        </script>


        {{-- Payment Instructions --}}
        <section class="max-w-2xl mx-auto space-y-10 pt-10">

            <div class="space-y-2">
                <h2 class="text-lg font-semibold text-gray-800 dark:text-white">How to Pay</h2>
                <p class="text-sm text-gray-600 dark:text-gray-400">
                    Use your GEPG control number to pay <strong>TZS 10,000</strong> through any of the following
                    methods. Your payment will be verified automatically.
                </p>
            </div>

            {{-- Logos --}}
            <div class="flex flex-wrap justify-center items-center gap-10">
                @foreach ([['src' => 'M-pesa.png', 'alt' => 'M-Pesa logo'], ['src' => 'Mixx_by_Yas.jpg', 'alt' => 'Mixx by Yas logo'], ['src' => 'Airtel money.jpg', 'alt' => 'Airtel Money logo'], ['src' => 'Nmb.jpg', 'alt' => 'NMB Bank logo']] as $logo)
                    <div class="w-24 h-24 rounded-xl overflow-hidden bg-white shadow flex items-center justify-center">
                        <img src="{{ asset('images/logos/' . $logo['src']) }}" alt="{{ $logo['alt'] }}"
                            class="object-cover w-full h-full" />
                    </div>
                @endforeach
            </div>

            {{-- Instructions --}}
            <div class="space-y-6">
                <x-payment-method name="M-Pesa">
                    <li>Dial <strong>*150*00#</strong></li>
                    <li>Select <strong>Pay by M-Pesa</strong></li>
                    <li>Enter <strong>Business Number: 123456</strong></li>
                    <li>Use your <strong>GEPG Control Number</strong> as reference</li>
                    <li>Confirm and complete payment</li>
                </x-payment-method>

                <x-payment-method name="Mixx by Yas">
                    <li>Open the Mixx app</li>
                    <li>Go to <strong>Payments</strong> → <strong>Education</strong></li>
                    <li>Select <strong>Edotech College</strong></li>
                    <li>Enter your <strong>GEPG Control Number</strong> and amount</li>
                    <li>Confirm and submit</li>
                </x-payment-method>

                <x-payment-method name="Airtel Money">
                    <li>Dial <strong>*150*60#</strong></li>
                    <li>Select <strong>Make Payment</strong></li>
                    <li>Enter <strong>Business Number: 789012</strong></li>
                    <li>Use your <strong>GEPG Control Number</strong> as reference</li>
                    <li>Complete the transaction</li>
                </x-payment-method>

                <x-payment-method name="NMB Bank">
                    <li>Visit any NMB branch or use NMB mobile app</li>
                    <li>Choose <strong>Bill Payment</strong></li>
                    <li>Enter <strong>Edotech College</strong> as biller</li>
                    <li>Use your <strong>GEPG Control Number</strong> as reference</li>
                    <li>Pay TZS 10,000 and keep your receipt</li>
                </x-payment-method>
            </div>

            {{-- Support Note --}}
            <div class="text-sm text-gray-600 dark:text-gray-400">
                <p>If your payment status doesn’t update within 10 minutes, contact support via WhatsApp or email with
                    your control number and receipt.</p>
            </div>

        </section>
    </x-dashboard-layout>
</x-app-layout>
