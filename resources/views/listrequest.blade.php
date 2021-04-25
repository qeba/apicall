<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('URL List') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="px-3 py-4 flex justify-center">
                <table class="w-full text-md bg-white shadow-md rounded mb-4">
                    <tbody>
                        <tr class="border-b">
                            <th class="text-left p-3 px-3">UUID</th>
                            <th class="text-left p-2 px-5">Access Limit</th>
                            <th class="text-left p-2 px-5">No of Access</th>
                            <th>Expiry ?</th>
                        </tr>
                        @foreach ($aall as $url)
                            <tr class="border-b hover:bg-blue-100" data-href='url://''>
                                <td class="p-3 px-5"><a href=" {{$url->url ."?uuid=". $url->uuid}}"  target="_blank">{{ $url->uuid }}</td>
                                <td class="p-3 px-5">{{ $url->click_limit }}</td>
                                <td class="p-3 px-5">{{ $url->clicks }}</td>
                                <td class="p-3 px-5 flex justify-end">
                                    @php
                                           if ($url->expiry->isPast() == 1) {
                                            echo '<p class="text text-red-400">Expired</p>';
                                           } else {
                                               echo $url->expiry->diffForHumans();
                                           }

                                    @endphp
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            <div class="flex justify-end">

                <ul class="flex pl-0 list-none rounded my-2">
                    <li class="relative block py-2 px-3 leading-tight bg-white border border-gray-300 text-blue-400 border-r-0 ml-0 rounded-l hover:bg-gray-200"><a class="page-link" href="{{$aall->previousPageUrl()}}">Previous</a></li>
                    @for($i=1;$i<=$aall->lastPage();$i++)
                    <li class="relative block py-2 px-3 leading-tight bg-white border border-gray-300 text-blue-400 border-r-0 hover:bg-gray-200"><a class="page-link" href="{{$aall->url($i)}}">{{$i}}</a></li>
                    @endfor
                    <li class="relative block py-2 px-3 leading-tight bg-white border border-gray-300 text-blue-400 rounded-r hover:bg-gray-200"><a class="page-link" href="{{$aall->nextPageUrl()}}">Next</a></li>
            </ul>
            </div>
        </div>
    </div>
</x-app-layout>
