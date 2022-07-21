<div>
    @extends('layouts.app')

    @section('content')
        <div class="flex space-x-6">
            @livewire('side-bar', ['activeTab' => $activeTab])
            @livewire('content', ['activeTab' => $activeTab])
        </div>
    @endsection

</div>
