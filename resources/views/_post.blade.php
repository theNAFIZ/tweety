<div class="flex flex-col">
    <div class="my-2">
        <a href="{{route('view-profile', $tweet->user)}}">
            <div class="flex flex-row">
                <img class="rounded-full mr-2 w-9 h-9" src="{{$tweet->user->avatar}}" alt="Avatar">
                <h2 class="font-bold align-middle">{{$tweet->user->name}}</h2>
            </div>
        </a>
        <p class="ml-10 break-words">{{$tweet->body}}</p>
        <div>
            {{--       reactions--}}
        </div>
    </div>
    <hr class="bg-gray-200">
</div>

