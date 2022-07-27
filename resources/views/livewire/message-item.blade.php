<div>
    <button wire:click="showSecretMessage" class="message-secret-btn {{ $message->is_read ? '' : 'is-read' }}">
        <img class="w-24 h-24" src="{{ asset('images/message.png') }}" alt="" />
    </button>
</div>
