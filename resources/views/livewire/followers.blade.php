<div>
    <li class="flex flex-col md:flex-row text-center rtl:ml-5">
        <div class="md:mr-1 font-bold md:font-normal dark:text-white ">
            {{ $this->count }}
        </div>
        <button onclick="Livewire.emit('openModal', 'followers-modal', {{ json_encode(['userId' => $userId]) }})" class="text-neutral-500 md:dark:text-white">
        {{ $this->user->followers()->count() > 1 ? __('followers') : __('follower') }}
    </button>
    </li>
</div>
