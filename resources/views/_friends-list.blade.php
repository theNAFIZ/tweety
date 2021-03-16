<h3 class="font-bold text-xl mb-4">Following</h3>
<ul>
    @forelse(auth()->user()->follows as $user)
        <li class="mb-4">
            <a href="{{route('view-profile', $user)}}">
                <div class="flex items-center">
                    <img class="rounded-full mr-2"
                         src="{{$user->avatar}}"
                         alt="avatar"
                         width="40"
                    />

                    {{$user->name}}
                </div>
            </a>
        </li>
    @empty
        <p>No friends yet!</p>
    @endforelse
</ul>
