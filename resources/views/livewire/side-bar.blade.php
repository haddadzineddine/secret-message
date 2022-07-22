<div class="w-3/12 h-screen p-6 shadow-xl ">
    <div class="flex items-center space-x-2  " href="#">
        <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-white" viewBox="0 0 20 20" fill="currentColor">
            <path fill-rule="evenodd"
                d="M2.166 4.999A11.954 11.954 0 0010 1.944 11.954 11.954 0 0017.834 5c.11.65.166 1.32.166 2.001 0 5.225-3.34 9.67-8 11.317C5.34 16.67 2 12.225 2 7c0-.682.057-1.35.166-2.001zm11.541 3.708a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                clip-rule="evenodd" />
        </svg>
        <span class="text-3xl font-bold text-white"> Sessage </span>
    </div>

    <div class="flex flex-col  h-5/6 space-y-2 mt-12">

        @foreach ($tabs as $key => $tab)
            <div>
                <button wire:click="selectTab('{{ $key }}')"
                    class="flex items-start  space-x-2 text-left py-3 rounded-xl pl-4 w-full {{ $this->isActive($key) ? 'active-btn' : 'btn' }}">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" viewBox="0 0 20 20" fill="currentColor">
                        <path
                            d="M10.707 2.293a1 1 0 00-1.414 0l-7 7a1 1 0 001.414 1.414L4 10.414V17a1 1 0 001 1h2a1 1 0 001-1v-2a1 1 0 011-1h2a1 1 0 011 1v2a1 1 0 001 1h2a1 1 0 001-1v-6.586l.293.293a1 1 0 001.414-1.414l-7-7z" />
                    </svg>
                    <span class="text-xl font-bold ">{{ $tab }}</span>
                </button>
            </div>
        @endforeach


    </div>


</div>
