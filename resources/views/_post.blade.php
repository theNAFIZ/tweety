<div class="flex flex-col">
    <div class=" flex my-2">
        <a href="{{route('view-profile', $tweet->user)}}">

            <img class="rounded-full mr-2 w-9 h-9" src="{{$tweet->user->avatar}}" alt="Avatar">


        </a>
        <div class="flex flex-col">
            <h2 class="font-bold align-middle">{{$tweet->user->name}}</h2>
            <p class="break-words">{{$tweet->body}}</p>
        </div>
    </div>
    @include('reaction')
    <hr class="bg-gray-200">
</div>

