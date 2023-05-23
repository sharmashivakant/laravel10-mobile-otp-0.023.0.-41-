<x-guest-layout>
    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <form method="POST" action="{{ route('otp.generate') }}">
        @csrf

        <!-- Email Address -->
        <div>
            <x-input-label for="mobile" :value="__('Mobile Number')" />
            <x-text-input id="mobile" class="block mt-1 w-full" type="mobile" name="mobile" :value="old('mobile')" placeholder="Register Mobile Number" required autofocus autocomplete="username" />
            <x-input-error :messages="$errors->get('mobile')" class="mt-2" />
        </div>

        
        <div class="flex items-center justify-end mt-4">
            @if (Route::has('login'))
                <a class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800" href="{{ route('login') }}">
                    {{ __('Login With username') }}
                </a>
            @endif

            <x-primary-button class="ml-3">
                {{ __('Send') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout>
