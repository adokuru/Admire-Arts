<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
           Message From {{$contact->contact_name}}
        </h2>
    </x-slot>
    <div class="container px-5 py-24 mx-auto">
        
        <div class="flex flex-wrap sm:-m-4 -mx-4 -mb-10 -mt-4">
          <div class="p-4 md:w-1/3 md:mb-0 mb-6 flex flex-col justify-center items-center max-w-sm mx-auto">
            <div class="bg-gray-300 h-56 w-full rounded-lg shadow-md bg-cover bg-center" style="background-image: url({{asset($contact->art->art_file_path)}})"></div>

            <div class=" w-70 bg-white -mt-10 shadow-lg rounded-lg overflow-hidden p-5">
              
              <div class="header-content inline-flex ">
                <div class="category-badge flex-1  h-4 w-4 m rounded-full m-1 bg-purple-100">
                  <div class="h-2 w-2 rounded-full m-1 bg-purple-500 " ></div>
                </div>
                <div class="title-post font-medium"> Art Name: {{$contact->art->name}} </div><br/>
              </div>
              

              <div class="summary-post text-base text-justify"> Message: <br> {{$contact->note}}
                <a href="mailto:{{$contact->contact_email}}" class="bg-blue-100 text-blue-500 mt-4 block rounded p-2 text-sm "><span class="">Reply to -  {{$contact->contact_email}}</span></a>
              </div>
             
            </div>
          </div>
        </div>
    </div>

</x-app-layout>
