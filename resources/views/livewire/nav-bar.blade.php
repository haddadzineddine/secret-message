<nav class=" px-2 sm:px-4 py-6 rounded ">
    <div class="container flex flex-wrap justify-between items-center mx-auto">
        <a href="https://flowbite.com/" class="flex items-center">
            <span class="self-center text-xl font-extrabold whitespace-nowrap text-white">GTT</span>
        </a>
        <button data-collapse-toggle="navbar-default" type="button"
            class="inline-flex items-center p-2 ml-3 text-sm rounded-lg md:hidden hover:opacity-80"
            aria-controls="navbar-default" aria-expanded="false">
            <svg class="w-6 h-6 text-white" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20"
                xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd"
                    d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z"
                    clip-rule="evenodd"></path>
            </svg>
        </button>
        <div class="hidden w-full md:block md:w-auto" id="navbar-default">
            <ul
                class="flex flex-col space-y-4 md:space-y-0 mt-4 md:flex-row md:space-x-8 md:mt-0 md:text-sm md:font-medium">

                @foreach ($tabs as $key => $tab)
                    <li>
                        <a href="{{ route($key) }}" class="text-white hover:opacity-80">
                            {{ $tab }}
                        </a>
                    </li>
                @endforeach

            </ul>
        </div>
    </div>
</nav>
