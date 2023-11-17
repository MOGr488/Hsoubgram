<div class="w-[30rem] max-auto lg:w-[95rem]">
    @forelse($this->posts as $post)
    <livewire:post :post="$post" :wire:key="'post_'.$post->id"> 
    @empty
        <div class="max-w-2xl gap-8 max-auto dark:text-white font-bold">
            {{ __('Start Following Your Friends and Enjoy.') }}
        </div>
    @endforelse
</div>