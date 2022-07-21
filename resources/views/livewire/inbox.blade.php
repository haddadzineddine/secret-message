<div class="w-9/12 p-6 ">


    <div class="flex items-center space-x-2" href="#">
        <span class="text-3xl pt-2  text-gray-500"><i class="bx bxs-message"></i></span>
        <span class="text-3xl font-bold text-gray-500"> Messages </span>
    </div>



    <div class="mt-16 message" wire:init="loadMessages">
        @forelse ($messages as $message)
            <livewire:message-item />
        @empty
            <div class="text-center text-gray-500">
                No messages yet.
            </div>
        @endforelse
    </div>
</div>
