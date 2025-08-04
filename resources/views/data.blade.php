<x-app-layout>
    <x-slot name="title">
        Protofolio | Data
    </x-slot>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Data') }}
        </h2>
    </x-slot>

    @auth
        <div class="py-12 ">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    
                    <div class=" bg-white border-b border-gray-200">
                        
                        <div class=" w-full py-4  bg-third shadow-lg px-12 ">
                            <div class="flex h-12">
                                <div class="flex  w-full  h-full ">
                                    <a href="#search" class="rounded-l-md  bg-primary flex justify-center ">
                                        <i class="text-3xl text-white py-1 px-3 uil uil-search"></i>
                                    </a>
                                    <input type="text"
                                        class="w-full rounded-r-md px-4 hover:bg-gray-100  focus:outline-0"
                                        placeholder=" Search">
                                </div>
                                <a :href="route('insert')" :active="request()->routeIs('insert')"> {{ __('Insert') }}
                                </a>
                                
                            </div>
                        </div>
                        <div style="overflow-x:auto;">
                            <table class="min-w-full">
                                <thead class="bg-primary ">
                                    <tr>
                                        <th scope="col" class="p-4">
                                            <div class="flex items-center">
                                                <input id="checkbox-all" type="checkbox"
                                                    class="w-4 h-4 text-gray-800 bg-gray-100 rounded border-gray-700 focus:ring-primary  focus:ring-2">
                                                <label for="checkbox-all" class="sr-only">checkbox</label>
                                            </div>
                                        </th>
                                        <th scope="col"
                                            class="py-3 px-6 text-xs font-bold tracking-wider text-left text-white uppercase ">
                                            Portofolio Name
                                        </th>
                                        <th scope="col" class="py-3 px-6 text-xs font-bold tracking-wider text-left text-white uppercase ">
                                            Category
                                        </th>
                                        <th scope="col"
                                            class="py-3 px-6 text-xs font-bold tracking-wider text-left text-white uppercase ">
                                            Point
                                        </th>
                                        <th scope="col"
                                            class="py-3 px-6 text-xs font-bold  tracking-wider text-left text-white uppercase ">
                                            Organizer
                                        </th>
                                        <th scope="col"
                                            class="py-3 px-6 text-xs font-bold  tracking-wider text-left text-white uppercase ">
                                            Certificate
                                        </th>
                                        <th scope="col"
                                            class="py-3 px-6 text-xs font-bold  tracking-wider text-left text-white uppercase ">
                                            Date
                                        </th>
                                        <th scope="col" class="p-4">
                                            <span class="sr-only">Edit</span>
                                        </th>

                                    </tr>
                                </thead>
                                <tbody class="bg-white divide-y divide-gray-200 ">
                                    @foreach($portofolio as $f)
                                    <tr class="hover:bg-hovering">
                                        <td class="p-4 w-4">
                                            <div class="flex items-center">
                                                <input id="checkbox-table-1" type="checkbox"
                                                    class="w-4 h-4 text-primary bg-gray-100 rounded border-gray-300  focus:ring-primary ring-offset-gray-800 focus:ring-2 ">
                                                <label for="checkbox-table-1" class="sr-only">checkbox</label>
                                            </div>
                                        </td>
                                        <td class="py-4 px-6 text-sm font-medium text-black whitespace-nowrap">
                                            {{$f->portofolio_name}}
                                        </td>
                                        <td class="overflow-hidden py-4 px-6 text-sm font-medium text-black whitespace-nowrap ">
                                            {{$f->category}}
                                        </td>
                                        <td class="py-4 px-6 text-sm font-medium text-black whitespace-nowrap">
                                            {{$f->category}}
                                        </td>
                                        <td class="py-4 px-6 text-sm font-medium text-black whitespace-nowrap">
                                            {{$f->organizer}}
                                        </td>
                                        <td class="py-4 px-6 text-sm font-medium text-black whitespace-nowrap">
                                            <a href="">view</a>
                                        </td>
                                        <td class="py-4 px-6 text-sm font-medium text-black whitespace-nowrap">
                                            {{$f->date}}
                                        </td>
                                        <td class="py-4 px-6 text-sm font-medium text-right whitespace-nowrap">
                                            <a href="#" class="text-black hover:underline">Edit</a>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>

                            </table>
                        </div>

                    
                    </div>
                </div>
            </div>
        </div>
    @else
        <div class="py-12 ">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    You are not login
                </div>
            </div>
        </div>
    @endauth
</x-app-layout>