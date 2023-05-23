<x-guest-layout>
    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <form method="POST" action="{{ route('otp.getlogin') }}">
        @csrf
        <input type="hidden" name="user_id" value="{{$user_id}}" />
        <!-- Email Address -->
        <div>
            <x-input-label for="otp" :value="__('OTP')" />
            <x-text-input id="otp" class="block mt-1 w-full" type="number" name="otp" :value="old('otp')" placeholder=" Enter OTP" required autofocus autocomplete="username" />
            <x-input-error :messages="$errors->get('otp')" class="mt-2" />
        </div>

        
        <div class="flex items-center justify-end mt-4">
            @if (Route::has('login'))
                <a class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800" href="{{ route('login') }}">
                    {{ __('Login With username') }}
                </a>
            @endif

            <x-primary-button class="ml-3">
                {{ __('Login') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout>
