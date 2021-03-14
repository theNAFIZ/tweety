<h3 class="font-bold text-xl mb-4">Friends</h3>
<ul>
    @foreach(range(1,8) as $index)
        <li class="mb-4">
            <div class="flex items-center">
                <img class="rounded-full mr-2" src="https://i.pravatar.cc/30" alt="avatar"/>John Doe
            </div>
        </li>
    @endforeach
</ul>
