@extends('layouts.app')

@section('content')
    <div class=" flex-1 lg:max-w-screen-sm rounded border">
        @foreach($users as $user)
            <a href="{{route('view-profile', $user)}}" class="flex p-4">
                <img class="rounded-full" src="{{$user->avatar}}" width="60">
                <div class="ml-2">
                    <h3 class="text-lg">{{$user->name}}</h3>
                    <p class="font-bold text-sm">{{'@'.$user->username}}</p>
                </div>
            </a>
            <hr>
        @endforeach
    </div>
@endsection

