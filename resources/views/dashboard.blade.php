<x-app-layout>
    <x-slot name="title">
        Protofolio | Dashboard
    </x-slot>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6  border-b border-gray-200">
                    <div class="w-full px-4">
                        <div class="max-w-xl mx-auto text-center mb-16 ">
                            <h4 class="font-semibold text-3xl text-primaryblue mb-2">Recent Portofolio</h4>
                            <p class="font-medium text-md text-dark ">Lorem ipsum dolor sit, amet elit. Qui molestiae id ratione fugiat! Autem est omnis distinctio, temporibus accusamus soluta!</p>
                        </div>
                    </div>
                    <div class="w-full px-4 flex flex-wrap justify-center xl:w-3/5 xl:mx-auto">
                        @foreach($portofolio as $f)
                        <a href="#Serti" class="mb-12 p-4 md:w-1/2 hover:bg-blueazure">
                            <div class="rounded-md shadow-md overflow-hidden">
                                <img src="dist/img/1.png" alt="Sertificate1" width=" w-full">
                            </div>
                            <h3 class="font-semibold text-xl mt-5 mb-3 text-third">{{$f->portofolio_name}}</h3>
                            <p class="font-normal text-base text-black">Lorem ipsum dolor, sit amet consectetur
                                adipisicing
                                elit. Sit quod beatae voluptatibus.</p>
                        </a>
                        @endforeach
                    </div>
                
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
