<x-guest-layout>
    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <form method="POST" action="{{ route('verification', ['hash' => $hash]) }}">
        @csrf

        <!-- Email Address -->
        <div>
            <x-input-label for="email" :value="__('Email')" />
        <x-text-input id="email" class="block mt-1 w-full" type="email" name="email"  required  />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- OTP -->
        <div class="mt-4">
            <x-input-label for="otp" :value="__('Masukan OTP')" />
            <x-text-input id="otp" class="block mt-1 w-full" type="text" name="otp" required autocomplete="one-time-code" />
            <x-input-error :messages="$errors->get('otp')" class="mt-2" />
        </div>
        
        <div class="flex items-center justify-end mt-4">
            <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('register') }}">
                {{ __('Kirim ulang?') }}
            </a>

            <x-primary-button class="ms-3">
                {{ __('Verifikasi') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout>
