<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __("Art") }}
        </h2>
    </x-slot>

    <div class="py-12">
        <form action="{{route('art.store')}}" method="POST" enctype="multipart/form-data">
            @csrf
            
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <h1>Add Art Work</h1>
            <div
                class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4 flex flex-col my-2"
            >
                <div class="-mx-3 md:flex mb-2">
                    <div class="md:w-1/2 px-3 mb-6 md:mb-0">
                        <label
                            class="block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2"
                            for="grid-city"
                        >
                            Title
                        </label>
                        <input required class="appearance-none block w-full bg-grey-lighter text-grey-darker border border-grey-lighter rounded py-3 px-4" id="title" name="title" type="text" placeholder="Albuquerque"
                        />
                    </div>
                    <div class="md:w-1/2 px-3">
                        <label
                            class="block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2"
                            for="art_categories"
                        >
                            Art Category
                        </label>
                        <div class="relative">
                            <select
                                class="block appearance-none w-full bg-grey-lighter border border-grey-lighter text-grey-darker py-3 px-4 pr-8 rounded"
                                name="art_categories"
                                id="art_categories"
                                required
                            >       
                                    <option value="">Please Choose</option>
                                    @foreach($art_categories as $id => $art)
                                        <option value="{{ $id }}" {{ old('art_category_id') == $id ? 'selected' : '' }}>{{ $art }}</option>
                                    @endforeach
                               
                            </select>
                        </div>
                    </div>
                    <div class="md:w-1/2 px-3">
                        <label
                            class="block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2"
                            for="artist"
                        >
                            Artist
                        </label>
                        <div class="relative">
                            <select
                                class="block appearance-none w-full bg-grey-lighter border border-grey-lighter text-grey-darker py-3 px-4 pr-8 rounded"
                                id="artist"
                                name="artist"
                                required
                            >
                            <option value="">Please Choose</option>
                            @foreach($artists as $id => $artist)
                                <option value="{{ $id }}" {{ old('artist_id') == $id ? 'selected' : '' }}>{{ $artist }}</option>
                            @endforeach
                            </select>
                        </div>
                    </div>
                </div>

                <div class="-mx-3 md:flex mb-6">
                    <div class="md:w-full px-3">
                        <label
                            class="block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2"
                            for="description"
                        >
                            About Art
                        </label>
                        <textarea
                            required
                            class="appearance-none block w-full bg-grey-lighter text-grey-darker border border-grey-lighter rounded py-3 px-4 mb-3"
                            id="description"
                            name="description"
                            placeholder="Bold and Strong Lines"
                        ></textarea>
                    </div>
                </div>
                <div class="-mx-3 md:flex mb-6">
                    <div
                        class="flex items-center justify-center bg-grey-lighter"
                    >
                        <label
                            class="w-64 flex flex-col items-center px-4 py-6 bg-white text-blue rounded-lg shadow-lg tracking-wide uppercase border border-blue cursor-pointer hover:bg-blue hover:text-white"
                        >
                            <svg
                                class="w-8 h-8"
                                fill="currentColor"
                                xmlns="http://www.w3.org/2000/svg"
                                viewBox="0 0 20 20"
                            >
                                <path
                                    d="M16.88 9.1A4 4 0 0 1 16 17H5a5 5 0 0 1-1-9.9V7a3 3 0 0 1 4.52-2.59A4.98 4.98 0 0 1 17 8c0 .38-.04.74-.12 1.1zM11 11h3l-4-4-4 4h3v3h2v-3z"
                                />
                            </svg>
                            <span class="mt-2 text-base leading-normal"
                                >Select a file</span
                            >
                            <input
                                 required
                                type="file"
                                name="art_file_path"
                                class="hidden"
                            />
                        </label>
                    </div>
                </div>
                <div class="-mx-3 md:flex mb-6">
                    <div class="md:w-full px-3">
                        <label
                            class="block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2"
                            for="short_note"
                        >
                            Short Note
                        </label>
                        <textarea
                            required
                            class="appearance-none block w-full bg-grey-lighter text-grey-darker border border-grey-lighter rounded py-3 px-4 mb-3"
                            id="short_note"
                            name="short_note"
                            placeholder="Bold and Strong Lines"
                        ></textarea>
                    </div>
                </div>
                <div class="-mx-3 md:flex mb-2">
                    <div class="md:w-1/2 px-6 mb-6 md:mb-0">
                        <label
                            class="block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2"
                            for="amount"
                        >
                            Amount
                        </label>
                        <input
                            required
                            class="appearance-none block w-full bg-grey-lighter text-grey-darker border border-grey-lighter rounded py-3 px-4"
                            id="amount"
                            name="amount"
                            type="number"
                            placeholder="100,000"
                        />
                    </div>
                    <div class="md:w-1/2 px-6 mb-6 md:mb-0">
                        
                        <button
                            class="mt-6 appearance-none block w-full bg-black text-white border border-grey-lighter rounded py-3 px-4 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-full"
                            
                            type="submit"
                            placeholder="100,000"
                        >Submit</button>

                    </div>
                    
                </div>
            </div>
        </div>
    </form>
    </div>
</x-app-layout>
