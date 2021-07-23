<x-guest-layout>
    <x-jet-authentication-card>
        <x-slot name="logo">
            {{-- <x-jet-authentication-card-logo /> --}}
            <img src="/images/apple-icon-152x152.png" alt="logo-berita-rame">
        </x-slot>

        <div class="mb-4 text-sm text-gray-600">
            {{ __('Forgot your password? No problem. Just let us know your email address and we will email you a password reset link that will allow you to choose a new one.') }}
        </div>

        @if (session('status'))
            <div class="mb-4 font-medium text-sm text-green-600">
                {{ session('status') }}
            </div>
        @endif

        <x-jet-validation-errors class="mb-4" />

        <form method="POST" action="{{ route('password.email') }}">
            @csrf

            <div class="block">
                <x-jet-label for="email" value="{{ __('Email') }}" />
                <x-jet-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus />
            </div>

            <div class="flex items-center justify-end mt-4">
                <x-jet-button>
                    {{ __('Email Password Reset Link') }}
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
