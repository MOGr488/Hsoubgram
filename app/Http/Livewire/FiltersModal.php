<?php

namespace App\Http\Livewire;

use Livewire\Component;
use LivewireUI\Modal\ModalComponent;

class FiltersModal extends ModalComponent
{

    public $filters = ['Original', 'Clarendon', 'Gingham', 'Moon', 'Perpetua'];
    public function mount($image)
    {
        $this->image = $image;
    }
    public function render()
    {
        return view('livewire.filters-modal');
    }
}
