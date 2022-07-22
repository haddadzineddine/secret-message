<div class="p-6">
    <div class="flex items-start space-x-2" href="#">
        <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-white" viewBox="0 0 20 20" fill="currentColor">
            <path
                d="M10.707 2.293a1 1 0 00-1.414 0l-7 7a1 1 0 001.414 1.414L4 10.414V17a1 1 0 001 1h2a1 1 0 001-1v-2a1 1 0 011-1h2a1 1 0 011 1v2a1 1 0 001 1h2a1 1 0 001-1v-6.586l.293.293a1 1 0 001.414-1.414l-7-7z" />
        </svg>
        <span class="text-3xl font-bold text-white"> Dashboard </span>
    </div>
    <div class="my-6">
        @error('image')
            <span class="text-red-500 text-sm">* {{ $message }}</span>
        @enderror

        @error('username')
            <span class="text-red-500 text-sm">* {{ $message }}</span>
        @enderror

    </div>


    <form wire:submit.prevent="saveUser" class="mt-16 flex flex-col justify-center items-center">
        <div class="relative w-64 h-64">


            @if ($this->getUserInfo())
                <img class="w-64 h-64 rounded-full absolute"
                    src="{{ $this->getUserInfo()->image
                        ? url('storage/' . $this->getUserInfo()->image)
                        : 'https://cdn.pixabay.com/photo/2015/10/05/22/37/blank-profile-picture-973460_960_720.png' }}"
                    alt="" />
            @else
                <img class="w-64 h-64 rounded-full absolute"
                    src="{{ $image
                        ? $image->temporaryUrl()
                        : 'https://cdn.pixabay.com/photo/2015/10/05/22/37/blank-profile-picture-973460_960_720.png' }}"
                    alt="" />
                <div
                    class="w-64 h-64 group hover:bg-gray-200 opacity-60 rounded-full absolute flex justify-center items-center cursor-pointer transition duration-500">
                    <button type="button" wire:click="showUploadImage">
                        <img class="hidden group-hover:block w-12" src="https://www.svgrepo.com/show/33565/upload.svg"
                            alt="" /></button>
                </div>

                <input wire:model="image" id="upload-image" class="hidden" type="file">
            @endif



        </div>

        @if ($this->getUserInfo())
            <h2 class="mt-8 font-semibold text-white text-xl">{{ $this->getUserInfo()->username }}</h2>

            <button wire:click="logout"
                class="flex justify-between space-x-4 bg-red-600 text-white mt-16 w-60 hover:bg-white hover:text-red-600  py-2 px-4 rounded-md">
                Delete
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" viewBox="0 0 20 20" fill="currentColor">
                    <path fill-rule="evenodd"
                        d="M10 18a8 8 0 100-16 8 8 0 000 16zM8.707 7.293a1 1 0 00-1.414 1.414L8.586 10l-1.293 1.293a1 1 0 101.414 1.414L10 11.414l1.293 1.293a1 1 0 001.414-1.414L11.414 10l1.293-1.293a1 1 0 00-1.414-1.414L10 8.586 8.707 7.293z"
                        clip-rule="evenodd" />
                </svg>
            </button>
        @else
            <div class="w-5/12 mt-16 flex space-x-2">
                <input type="text" id="last_name"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-sm focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                    wire:model="username" placeholder="Username" required>

                <button type="submit"
                    class="active-btn hover:bg-white hover:text-green-600 hover:border hover:border-green-600  py-2 px-4 rounded-sm">Generate</button>
            </div>
        @endif


    </form>

    @if ($link || $this->getUserInfo())
        <div class="flex justify-center  mt-32">
            <div class="flex  p-3 rounded-lg bg-slate-100 justify-between w-4/6">

                <div>{{ $link ?? $this->getUserInfo()->link }}</div>

                <button wire:click="copyToClipboard" class="flex space-x-2">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M8 16H6a2 2 0 01-2-2V6a2 2 0 012-2h8a2 2 0 012 2v2m-6 12h8a2 2 0 002-2v-8a2 2 0 00-2-2h-8a2 2 0 00-2 2v8a2 2 0 002 2z" />
                    </svg>
                    Copy
                </button>


            </div>
        </div>
    @endif



</div>
