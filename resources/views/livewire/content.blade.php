<div class="content">
    <a class="brand" href="#">
        <span class="icon"><i class="bx bxs-message"></i></span>
        <span class="text">
            <h2>Messages</h2>
        </span>
    </a>



    <div class="content-message-items">
        <div>
            <button wire:click="openMessage" class="message-secret-btn">
                <img class="image-secret" src="{{ asset('images/secret.png') }}" alt="" />
            </button>
        </div>

    </div>

    <x-modal wire:model.defer="simpleModal">
        <x-card title="Consent Terms">
            <p class="text-gray-600">
                Lorem Ipsum...
            </p>

            <x-slot name="footer">
                <div class="flex justify-end gap-x-4">
                    <x-button flat label="Cancel" x-on:click="close" />
                    <x-button primary label="I Agree" />
                </div>
            </x-slot>
        </x-card>
    </x-modal>
</div>