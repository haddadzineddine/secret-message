<div>
    @if ($activeTab == 'inbox')
        @livewire('inbox')
    @endif

    @if ($activeTab == 'dashboard')
        @livewire('dashboard')
    @endif

    @if ($activeTab == 'home')
        @livewire('secret')
    @endif
</div>
