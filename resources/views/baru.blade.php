<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('URL Generated...') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <div class="p-6 sm:px-20 bg-white border-b border-gray-200">
                    <div class="mt-8 text-2xl">
                        Here is your test URL;
                    </div>
                    <p class="mt-1"> {{ $completeURL }} </p>

                    <div class="grid grid-cols-2 gap-3 pt-2">

                            <a href="{{ $completeURL }} " target="_blank"
                                class="bg-red-500 hover:bg-red-400 text-white font-bold py-2 px-4 border-b-4 border-red-700 hover:border-red-500 rounded text-center">
                                Visit URL
                            </a>
                            <a href="http://jetstream.test/dashboard"
                                class="bg-blue-500 hover:bg-blue-400 text-white font-bold py-2 px-4 border-b-4 border-blue-700 hover:border-blue-500 rounded text-center">
                                Return to Dashboard
                            </a>

                    </div>

                    <div class="mt-6 text-gray-500">

                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
