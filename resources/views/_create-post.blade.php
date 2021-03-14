<form action="/tweets" method="POST">
    @csrf
    <textarea
        name="body"
        class="h-32 w-full m-1.5 border p-2 rounded"
        placeholder="What's on your mind?"
        required
    >
        {{old('body')}}
    </textarea>
    @error('body')
    <p class="text-red-600">{{$message}}</p>
    @enderror
    <button class="left-0 text-blue-50 bg-blue-400 rounded px-4 py-2 cursor-pointer" type="submit">Post</button>
</form>
