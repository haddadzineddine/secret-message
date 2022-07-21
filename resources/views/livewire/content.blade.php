<div class="w-9/12 p-6 ">
    @if ($activeTab == 'inbox')
        @livewire('inbox')
    @else
        @livewire('dashboard')
    @endif
</div>
