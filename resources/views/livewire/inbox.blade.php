<div class="w-9/12 p-6">

    <div class="mt-16 message" wire:init="loadMessages">

        @forelse ($messages as $message)
            @livewire('message-item', ['message' => $message])
        @empty
            <div class="text-white">
                No messages yet.
            </div>
        @endforelse
    </div>
</div>
