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
                    <div class="tex sm:py-6 text-2xl text-blue-500 font-bold">Dashboard </div>
                    <div class="grid grid-cols-1 divide-y divide-yellow-500  sm:px-6"></div>
                    <div class="grid grid-cols-1 divide-y divide-black-500 py-4">
                        <div class="py-3">

                            <p class="pb-3 text-black font-semibold">API Usage:</p>
                            <p class="text-sm">Method: GET</p>
                            <p class="text-sm">URI: {{ Request::root() }}/api/slack/geturl </p>

                            <p class="mt-4">Header:</p>
                            <p class="text-sm"> Accept: application/json</p>
                            <p class="text-sm"> Authorization: Bearer #your token here# </p>
                            <div class="my-5">
                                <a href="http://jetstream.test/user/api-tokens"
                                    class="bg-blue-500 hover:bg-blue-400 text-white font-bold py-2 px-4 border-b-4 border-blue-700 hover:border-blue-500 rounded">
                                    Generate API Token
                                </a>

                                <p class="mt-5">* Token is attached to user account. </p>
                                <p>* Token only need to have read/create Permissions. </p>



                            </div>


                        </div>

                        <div class=" py-5">

                            <p  class="font-semibold" >Expected Response: </p>


                            <div class="my-5">

                                <p class="text-sm"> "URL":
                                    {{ Request::root() }}/starting?uuid=e8ea3f1e-77a2-4e96-8527-3f89d065cc81",</p>
                                <p class="text-sm"> "uuid": "e8ea3f1e-77a2-4e96-8527-3f89d065cc81",</p>
                                <p class="text-sm"> "expired": "2021-04-26T09:52:10.105174Z"</p>

                            </div>
                            <p>* in JSON format. </p>
                            <p>* URL only valid for 2 times access. </p>
                            <p>* Expired in 24 hours - api will return the expired time. </p>

                        </div>
                        <div class="py-5">

                            <p class="font-semibold">URL Testing: </p>

                            <p class=" mt-5 mb-3">Generate test URL, for testing, define your variable such as number of
                                access limit / time to link expired.</p>
                            <div class="relative">
                                <form method="post" action="/generatelink/create" enctype="multipart/form-data">
                                    {{ csrf_field() }}
                                    <p> Number of access: </p>
                                    <select
                                        class="my-3 block appearance-none w-full bg-gray-200 border border-gray-200 text-gray-700 py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-blue-200"
                                        id="limit" name="limit" placeholder="Select to limit number of access<">

                                        <option>1</option>
                                        <option>2</option>
                                        <option>3</option>
                                    </select>
                                    <p> Time to expired: </p>
                                    <select
                                        class="my-3 block appearance-none w-full bg-gray-200 border border-gray-200 text-gray-700 py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-blue-200"
                                        id="time" name="time" placeholder="Select Expired time in hours">

                                        <option value="1">1 Hour</option>
                                        <option value="2">2 Hours</option>
                                        <option value="24">24 Hours</option>
                                        <option value="48">48 Hours</option>
                                    </select>
                                    <div class="form-group row">
                                        <div class="offset-sm-3 col-sm-9">
                                            <button type="submit"
                                                class="w-full py-3 bg-blue-400 text-white rounded-md text-sm focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent shadow-lg">Generate
                                                URL</button>
                                        </div>
                                    </div>
                            </div>
                            </form>
                            <div class="py-5"">
                                <div id = 'msg'>You will redirect to new page for URL...</div>
                            </div>
                        </div>
                        {{-- {{ $url = URL::temporarySignedRoute('start', now()->addMinutes(2)) }} --}}
                        <br></br>

                        {{-- <p>{{$link->url}}?uuid={{$link->uuid}}</p>
                        <p>UUID: {{$link->uuid}}</p>
                        <p>Expired: {{$link->expiry}}</p> --}}

                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
</x-app-layout>

