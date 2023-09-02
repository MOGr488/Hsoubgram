<x-app-layout>
    <div class="container lg:px-32 px-4 py-8 mx-auto items-center  justify-center ">

    <div class="grid grid-cols-3 gap-1 md:gap-5 mt-8">
        @foreach($posts as $post)
            <div>
                <a href="/p/{{$post->slug}}">
                    <img height="360" src="{{ asset('storage/'.$post->image) }}" >
                </a>
            </div>
        @endforeach
    </div>
    </div>
    <div class="mt-5">
        {{ $posts->links() }}
    </div>

</x-app-layout>
