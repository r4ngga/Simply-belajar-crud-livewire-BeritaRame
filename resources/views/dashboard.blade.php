<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <style>
        .color-button{
            background-color: #10B981;
            /* color: green; */
        }

        .color-button-edit{
            background-color: #FBBF24;
        }

        .color-button-edit:hover{
            background-color: #FDE68A;
        }

        .btn-edit{
            size : 100%;
            width: 50px;
            max-width: 60px;
            align-content: center;
        }

        .color-button-delete{
            background-color: #DC2626;
        }

        .color-button-delete:hover{
            background-color: #F87171;
        }

        .btn-delete{
            size : 100%;
            width: 65px;
            max-width: 75px;
            align-content: center;
        }


    </style>

    <div class="py-8">
        <div class="row">
            <div class="max-w-6xl mx-auto sm:px-4 lg:px-6">
                <div class="bg-white justify-center overflow-hidden shadow-xl sm:rounded-lg">
                <livewire:create-post />
                </div>
                <livewire:list-post/>
            </div>
        </div>
        <div class="row">
            <div class="flex justify-center mt-2 sm:items-center ">
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
        </div>
    </div>
    {{-- <div class="py-8">
            <div class="row">
                <div class="max-w-6xl mx-auto sm:px-4 lg:px-8">
                    <div class="bg-white flex justify-center overflow-hidden shadow-xl sm:rounded-lg">
                    <livewire:list-post/>
                    </div>
                </div>
            </div>
        </div> --}}


</x-app-layout>
