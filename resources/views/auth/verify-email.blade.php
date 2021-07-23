<x-guest-layout>
    <x-jet-authentication-card>
        <x-slot name="logo">
            {{-- <x-jet-authentication-card-logo /> --}}
            <img src="/images/apple-icon-152x152.png" alt="logo-berita-rame">
        </x-slot>

        <div class="mb-4 text-sm text-gray-600">
            {{ __('Thanks for signing up! Before getting started, could you verify your email address by clicking on the link we just emailed to you? If you didn\'t receive the email, we will gladly send you another.') }}
        </div>

        @if (session('status') == 'verification-link-sent')
            <div class="mb-4 font-medium text-sm text-green-600">
                {{ __('A new verification link has been sent to the email address you provided during registration.') }}
            </div>
        @endif

        <div class="mt-4 flex items-center justify-between">
            <form method="POST" action="{{ route('verification.send') }}">
                @csrf

                <div>
                    <x-jet-button type="submit">
                        {{ __('Resend Verification Email') }}
                    </x-jet-button>
                </div>
            </form>

            <form method="POST" action="{{ route('logout') }}">
                @csrf

                <button type="submit" class="underline text-sm text-gray-600 hover:text-gray-900">
                    {{ __('Log Out') }}
                </button>
            </form>
        </div>
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
