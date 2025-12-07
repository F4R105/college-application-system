<div>
    @if (session('success'))
        <p class="text-green-500">{{ session('success') }}</p>
    @endif

    @if (session('error'))
        <p class="text-red-500">{{ session('error') }}</p>
    @endif
</div>