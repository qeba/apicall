<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-6">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <div class="p-6 sm:px-20 bg-white border-b border-gray-200">
                    <div class="text text-black sm:py-6 text-2xl"> Welcome to Dashboard </div>
                    <div class="grid grid-cols-1 divide-y divide-yellow-500  sm:px-6"></div>
                    <div class="grid grid-cols-1 divide-y divide-black-500 py-5">
                        <div class="py-5"">API Usage Guide: </div>
                        <div class=" py-5"">Requirement: </div>
                        <div class="py-5"">Generate Example: </div>
                        {{ $url = URL::temporarySignedRoute('start', now()->addMinutes(2)) }}
                      </div>
                </div>
            </div>
        </div>
        </div>
    </div>
</x-app-layout>
