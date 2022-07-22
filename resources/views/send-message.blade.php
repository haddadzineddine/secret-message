@extends('layouts.app')


@section('content')
    <div class="flex flex-col justify-center items-center mt-8">
        <div class="w-64 h-64">
            <img class="w-64 h-64 rounded-full absolute"
                src="{{ $user->image ? url('storage/' . $user->image) : 'https://cdn.pixabay.com/photo/2015/10/05/22/37/blank-profile-picture-973460_960_720.png' }}"
                alt="" />

        </div>

        <h2 class="mt-8 font-semibold text-white text-xl">{{ $user->username }}</h2>

        <div class="mt-12 w-full">
            @livewire('send-message-form', ['user' => $user])
        </div>
    </div>
@endsection
