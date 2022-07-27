<div class="p-6">


    @error('image')
        <div class="p-4 mb-4 text-sm text-red-700 bg-red-100 rounded-lg dark:bg-red-200 dark:text-red-800" role="alert">
            <span class="font-medium"> {{ $message }}</span>
        </div>
    @enderror

    @error('username')
        <div class="p-4 mb-4 text-sm text-red-700 bg-red-100 rounded-lg dark:bg-red-200 dark:text-red-800" role="alert">
            <span class="font-medium">{{ $message }}</span>
        </div>
    @enderror




    <form wire:submit.prevent="saveUser" class="mt-16 flex flex-col justify-center items-center">
        <div class="relative w-64 h-64">


            @if ($this->getUserInfo())
                <img class="w-64 h-64 p-2 rounded-full absolute" {{-- src="{{ $this->getUserInfo()->image ? url('storage/' . $this->getUserInfo()->image) : asset('/images/user.png') }}" --}}
                    src="{{ asset('/images/user.png') }}" alt="" />
            @else
                <img class="w-64 h-64 p-2 rounded-full absolute"
                    src="{{ $image ? $image->temporaryUrl() : asset('/images/user.png') }}" alt="" />
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
                class="flex justify-between space-x-4 bg-red-500 text-white mt-16 w-60 hover:bg-white hover:text-red-600  py-2 px-4 rounded-lg">
                Delete
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" viewBox="0 0 20 20" fill="currentColor">
                    <path fill-rule="evenodd"
                        d="M10 18a8 8 0 100-16 8 8 0 000 16zM8.707 7.293a1 1 0 00-1.414 1.414L8.586 10l-1.293 1.293a1 1 0 101.414 1.414L10 11.414l1.293 1.293a1 1 0 001.414-1.414L11.414 10l1.293-1.293a1 1 0 00-1.414-1.414L10 8.586 8.707 7.293z"
                        clip-rule="evenodd" />
                </svg>
            </button>
        @else
            <div class="md:w-5/12 mt-16 flex space-x-2">
                <input type="text" id="last_name"
                    class=" text-gray-900 text-sm rounded-lg border-none outline-none block w-full p-2.5 "
                    wire:model="username" placeholder="Username" required>

                <button type="submit"
                    class="bg-white text-main border border-white hover:bg-white hover:text-main hover:border hover:border-main  py-2 px-4 rounded-lg">Generate</button>
            </div>
        @endif


    </form>

    @if ($link || $this->getUserInfo())
        <div class="flex justify-center  mt-24">
            <div class="flex  p-3 rounded-lg bg-slate-100 items-center justify-between space-x-8  opacity-90">

                <div class="text-sm">{{ $link ?? $this->getUserInfo()->link }}</div>

                <button wire:click="copyToClipboard" class="flex space-x-4 items-center justify-center text-sm">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24"
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
