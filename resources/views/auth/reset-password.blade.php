<x-guest-layout>
    <x-jet-authentication-card>
        <x-slot name="logo">
            {{-- <x-jet-authentication-card-logo /> --}}
            <img src="/images/apple-icon-152x152.png" alt="logo-berita-rame">
        </x-slot>

        <x-jet-validation-errors class="mb-4" />

        <form method="POST" action="{{ route('password.update') }}">
            @csrf

            <input type="hidden" name="token" value="{{ $request->route('token') }}">

            <div class="block">
                <x-jet-label for="email" value="{{ __('Email') }}" />
                <x-jet-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email', $request->email)" required autofocus />
            </div>

            <div class="mt-4">
                <x-jet-label for="password" value="{{ __('Password') }}" />
                <x-jet-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="new-password" />
            </div>

            <div class="mt-4">
                <x-jet-label for="password_confirmation" value="{{ __('Confirm Password') }}" />
                <x-jet-input id="password_confirmation" class="block mt-1 w-full" type="password" name="password_confirmation" required autocomplete="new-password" />
            </div>

            <div class="flex items-center justify-end mt-4">
                <x-jet-button>
                    {{ __('Reset Password') }}
                </x-jet-button>
            </div>
        </form>
    </x-jet-authentication-card>
    <div class="flex justify-center mb-6 sm:items-center ">
            <div class="text-center text-sm text-gray-500 sm:text-left">
                <div class="flex items-center">
                    <img src="/images/instagram/favicon-16x16.png" alt="logo-instagram">
                    <a href="https://www.instagram.com/_rawis/" class="ml-1 underline">
                        Instagram
                    </a>

                    <img src="/images/github/favicon-16x16.png" alt="logo-github" class="ml-4 -mt-px w-5 h-5 text-gray-400">

                    <a href="https://github.com/r4ngga" class="ml-1 underline">
                        Github
                    </a>
                </div>
            </div>

            <div class="ml-4 text-center text-sm text-gray-500 sm:text-right sm:ml-2">
                Copyright  &copy; By Rangga Wisnu Aji {{date('Y')}}
            </div>
    </div>
</x-guest-layout>
