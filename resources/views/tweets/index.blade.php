@extends('layouts.app')

@section('content')

    <div class="flex-1 lg:max-w-screen-sm">
        <div class="rounded border px-2 py-4 mb-4">
            @include('_create-post')
        </div>
        <div class="rounded border px-4 pt-4">
            @forelse($tweets as $tweet)
                @include('_post')
            @empty
                <p>No Posts found!</p>
            @endforelse
        </div>
    </div>

@endsection
