<div class="flex flex-col mb-4">
    <div class="flex flex-row">
        <img class="rounded-full mr-2" src="{{$tweet->user->avatar}}" alt="Avatar">
        <h2 class="font-bold align-middle">{{$tweet->user->name}}</h2>
    </div>
    <p class="ml-10">{{$tweet->body}}</p>
    <div>
        {{--       reactions--}}
    </div>
    <hr class="mt-4 bg-gray-200">
</div>

