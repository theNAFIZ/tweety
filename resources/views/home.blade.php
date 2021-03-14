@extends('layouts.app')

@section('content')
    <div class="lg:flex justify-between">
        <div class="lg:w-1/6  rounded">
            @include('_sidebar-links')
        </div>
        <div class="flex-1 lg:max-w-screen-sm">
            <div class="rounded border px-2 py-4 mb-4">
                @include('_create-post')
            </div>
            <div class="rounded border px-2 py-4">
                @foreach($tweets as $tweet)
                    @include('_post')
                @endforeach
            </div>

        </div>
        <div class="lg:w-1/6">
            @include('_friends-list')
        </div>
    </div>
@endsection
