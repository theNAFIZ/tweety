<form action="{{route('create-tweet')}}" method="POST">
    @csrf
    <textarea
        name="body"
        class="w-full"
        placeholder="What's on your mind?"
        required
    ></textarea>
    @error('body')
    <p class="text-red-600">{{$message}}</p>
    @enderror
    <br>
    <button class="text-blue-50 bg-blue-400 rounded px-4 py-2 cursor-pointer" type="submit">Post</button>
</form>
