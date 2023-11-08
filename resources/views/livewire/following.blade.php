<div>
    <li class="flex flex-col md:flex-row text-center">
        <div class="md:mr-1 font-bold md:font-normal dark:text-white ">
            {{ $this->count }}
        </div>
        <button onclick="Livewire.emit('openModal', 'following-modal', {{ json_encode(['userId' => $userId]) }})"
            class="text-neutral-500 md:dark:text-white">{{ __('following') }}</button>
    </li>
</div>
