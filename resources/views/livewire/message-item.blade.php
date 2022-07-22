<div>
    <button wire:click="showSecretMessage" class="message-secret-btn {{ $message->is_read ? '' : 'is-not-read' }}">
        <img class="w-24 h-24" src="{{ asset('images/secret.png') }}" alt="" />
    </button>
</div>
