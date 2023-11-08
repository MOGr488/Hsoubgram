<div class="max-h-96 flex flex-col">
    <div class="flex w-full items-center border-b border-b-netural-100 p-2">
        <h1 class="text-lg font-bold pb-2 grow text-center">{{ __('Following') }}</h1>
        <button wire:click="$emit('closeModal')"><i class="bx bx-x text-xl"></i></button>
    </div>
    <ul class="overflow-y-auto">
        @forelse ($this->following_list as $following)
            <li class="flex flex-row w-full p-3 items-center text-sm">
                <div>
                    <img src="{{ $following->image }}" alt="{{ $following->username }}" class="w-8 h-8 mr-2 rounded-full border border-neutral-300">
                </div>
                <div class="flex flex-col grow">
                    <div class="font-bold">
                        <a href="/{{ $following->username }}">{{ $following->username }}</a>
                    </div>
                    <div class="text-sm text-neutral-500">
                        {{ $following->name }}
                    </div>
                </div>

                @auth
                <dir>
                    <button wire:click="unfollow({{ $following->id }})" class="border border-gray-500 px-2 py-1 rounded">{{ __('Unfollow') }}</button>
                </dir>
                @endauth
            </li>

        @empty
            <li class="w-full p-3 text-center">
                {{ __('You are not  follwing anyone.') }}
            </li>
        @endforelse
    </ul>
</div>
