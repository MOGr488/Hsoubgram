<div>
    @if($follow_state == 'Pending')
    <span class="w-30 cursor-pointer bg-gray-400 text-white text-sm font-bold py-1 text-center rounded px-3 ">{{ __('Pending') }}</span>
    @else
    <button wire:click="toggle_follow"
    class="{{ $classes }} w-30 text-blue-400 text-sm font-bold px-3 py-1 cursor-pointer  text-center rounded">{{ __($follow_state) }}</button>
    @endif
</div>
