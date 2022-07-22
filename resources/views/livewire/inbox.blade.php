<div class="w-9/12 p-6">

    <div class="flex items-start space-x-2" href="#">
        <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-white" viewBox="0 0 20 20" fill="currentColor">
            <path d="M2 5a2 2 0 012-2h7a2 2 0 012 2v4a2 2 0 01-2 2H9l-3 3v-3H4a2 2 0 01-2-2V5z" />
            <path
                d="M15 7v2a4 4 0 01-4 4H9.828l-1.766 1.767c.28.149.599.233.938.233h2l3 3v-3h2a2 2 0 002-2V9a2 2 0 00-2-2h-1z" />
        </svg>
        <span class="text-3xl font-bold text-white"> Messages </span>
    </div>

    <div class="mt-16 message" wire:init="loadMessages">
        @forelse ($messages as $message)
            @livewire('message-item', ['message' => $message])
        @empty
            <div class="text-center text-white">
                No messages yet.
            </div>
        @endforelse
    </div>
</div>
