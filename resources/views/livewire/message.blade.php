<div class="flex flex-col justify-center items-center mt-8">


    @error('secretMessage')
        <div class="p-4 mb-4 w-8/12 text-sm text-red-700 bg-red-100 rounded-lg dark:bg-red-200 dark:text-red-800"
            role="alert">
            <span class="font-medium">{{ $message }}</span>
        </div>
    @enderror


    <div class="w-64 h-64">
        <img class="w-64 h-64 rounded-full absolute"
            src="{{ $user->image ? url('storage/' . $user->image) : 'https://cdn.pixabay.com/photo/2015/10/05/22/37/blank-profile-picture-973460_960_720.png' }}"
            alt="" />

    </div>

    <h2 class="mt-8 font-semibold text-white text-xl">{{ $user->username }}</h2>

    <div class="mt-12 w-full mb-4">
        <form wire:submit.prevent="sendMessage" class="flex flex-col justify-center items-center">

            <textarea rows="8" wire:model="secretMessage"
                class="opacity-90 block md:w-5/12 w-10/12 p-2.5 text-sm text-gray-900 bg-white rounded-xl border border-white focus:ring-green-800 focus:border-green-700 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-green-700 dark:focus:border-green-700"
                placeholder="Your message..."></textarea>

            <button class="flex active-btn mt-12 py-2 px-12 rounded-md hover:bg-white  hover:text-green-700 ">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 mr-4" viewBox="0 0 20 20" fill="currentColor">
                    <path fill-rule="evenodd"
                        d="M2.166 4.999A11.954 11.954 0 0010 1.944 11.954 11.954 0 0017.834 5c.11.65.166 1.32.166 2.001 0 5.225-3.34 9.67-8 11.317C5.34 16.67 2 12.225 2 7c0-.682.057-1.35.166-2.001zm11.541 3.708a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                        clip-rule="evenodd" />
                </svg>
                Send Message
            </button>

        </form>
    </div>
</div>
