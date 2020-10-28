<head>
    <title>Home</title>
</head>

<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Home') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <div class="antialised relative flex items-top justify-center min-h-screen dark:bg-gray-900 sm:items-center sm:pt-0">
                    <p class="flex text-xl items-center justify-center min-h-screen">Hello {{Auth::user()->name }}.</p>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
