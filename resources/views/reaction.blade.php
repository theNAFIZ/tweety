<div class="flex mx-6 my-2">
    <form method="post" action="{{route('dislike-tweet', $tweet)}}">
        @csrf
        <div class="flex text-gray-700">
            <button type="submit"
                    class="font-bold {{$tweet->isLikedBy(auth()->user()) ? 'bg-blue-400':'bg-gray-400'}} w-6 rounded-full text-white leading-snug mr-1">
                +
            </button>
            <h6 class="{{$tweet->isLikedBy(auth()->user()) ? 'text-blue-400':'text-gray-400'}}">{{$tweet->likes ?: 0}}</h6>
        </div>
    </form>
    <form method="post" action="{{route('dislike-tweet', $tweet)}}">
        @method('put')
        @csrf
        <div class="flex text-gray-700 ml-4">
            <button type="submit"
                    class="font-bold {{$tweet->isDislikedBy(auth()->user()) ? 'bg-blue-400':'bg-gray-400'}} w-6 rounded-full text-white leading-snug mr-1">
                -
            </button>
            <h6 class="{{$tweet->isDislikedBy(auth()->user()) ? 'text-blue-400':'text-gray-400'}}">{{$tweet->dislikes ?: 0}}</h6>
        </div>
    </form>

</div>
