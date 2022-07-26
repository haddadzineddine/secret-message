<div>

    @extends('layouts.app')


    @section('content')
        @livewire('nav-bar')

        @livewire('content', ['activeTab' => $activeTab])
    @endsection

</div>
