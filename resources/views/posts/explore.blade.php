<x-app-layout>
    <div class="grid grid-cols-2 md:grid-cols-3 gap-4">
        @foreach($posts as $post)
            <div>
                <a href="/p/{{$post->slug}}">
                    <img class="w-full aspect-square object-cover rounded-lg" src="{{ asset('storage/'.$post->image) }}" >
                </a>
            </div>
        @endforeach
    </div>
    <div class="mt-5">
        {{ $posts->links() }}
    </div>
</x-app-layout>
