@extends('layouts.app')

@section('content')
    <div class="flex-1 lg:max-w-screen-sm relative">
        <header class="mb-6">
            <img class="rounded-xl" src="https://picsum.photos/id/{{$user->id}}/700/223" alt="Cover">
            <div class="flex justify-between items-center my-6">
                <div>
                    <h3 class="font-bold text-2xl mb-1">{{$user->name}}</h3>
                    <p>Joined in {{$user->created_at->diffForHumans()}}</p>
                </div>
                @auth
                    <div>
                        @can('edit', $user)
                            <a href="{{route('edit-profile', $user)}}" class="shadow rounded-full py-1.5 px-3.5 m-2">Edit
                                Profile</a>
                        @endcan
                        @unless(auth()->user()->is($user))
                            <form method="POST" action="{{route("follow-profile", $user)}}">
                                @csrf
                                <button
                                    class="bg-blue-400 rounded-full py-1.5 px-3.5 mx-2 text-white">{{auth()->user()->isFollowing($user) ? 'Unfollow' : 'Follow'}}</button>
                            </form>
                        @endunless
                    </div>
                @endauth
            </div>

            <img class="rounded-full absolute left-64 top-24 border-4 border-white" src="{{$user->avatar}}"
                 width="130">

            <p class="text-center mx-14">But I must explain to you how all this idea of pleasure and
                praising pain was born and I will give you an account of the system.</p>
        </header>
        <div class="rounded border px-4 pt-4">
            @forelse($tweets as $tweet)
                @include('_post')
            @empty
                <p>No Posts found!</p>
            @endforelse
        </div>
    </div>
@endsection
