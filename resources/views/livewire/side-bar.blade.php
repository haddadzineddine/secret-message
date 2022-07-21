<div class="w-3/12 h-screen p-6 shadow-xl ">
    <div class="flex items-center space-x-2  " href="#">
        <span class="text-3xl pt-1  text-gray-500"><i class="bx bxs-dashboard"></i></span>
        <span class="text-3xl font-bold text-gray-500"> Sessage </span>
    </div>

    <div class="flex flex-col  h-5/6 space-y-2 mt-12">


        <div>
            <button wire:click="selectTab('dashboard')"
                class="space-x-2 text-left py-3 rounded-xl pl-4 w-full {{ $this->isActive('dashboard') }}">
                <span class="text-xl "><i class="bx bxs-home-circle"></i></span>
                <span class="text-xl font-bold ">Dashboard</span>
            </button>
        </div>
        <div>
            <button wire:click="selectTab('inbox')"
                class="space-x-2 text-left py-3 rounded-xl pl-4 w-full  {{ $this->isActive('inbox') }}">
                <span class="text-xl "><i class="bx bxs-message-square-detail"></i></span>
                <span class="text-xl font-bold">Inbox</span>
            </button>
        </div>
    </div>

    <div class="side-bar-user-info">
        <button class="space-x-2 text-left  text-gray-500  py-3 rounded-xl pl-4 ">
            <span class="text-lg "><i class="bx bxs-user"></i></span>
            <span class="text-lg ">haddad_zineddine</span>
        </button>
    </div>
</div>
