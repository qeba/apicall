<x-content-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Getting Started') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <div class="p-5 sm:px-20 bg-white border-b border-gray-200">
                    <div class="mt-8 text-3xl">
                        Welcome!!
                    </div>
                <p class="lead">Here is the guide for you to get started...</p>
                <hr class="my-2">
                <p>This is the video for you to get started; </p>
                <div class="aspect-w-16 aspect-h-9 mt-3">
                    <iframe src="https://www.youtube.com/embed/dQw4w9WgXcQ?rel=0" frameborder="0"
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                        allowfullscreen></iframe>
                </div>

                <p class="text mt-2">This page will be expired on certain time, you need to request to access the page again.. bla bla
                    bla... </p>
                    <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded my-4">
                        Learn More
                    </button>
                </div>


            </div>
        </div>
    </div>
    </div>
</x-app-layout>
