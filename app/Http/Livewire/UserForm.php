<?php

namespace App\Http\Livewire;

use Livewire\Component;
use LivewireUI\Modal\ModalComponent;

class UserForm extends ModalComponent
{
    public $counter = 0;

    public function update()
    {
        $this->counter++;

    }


    public function render()
    {
        return view('livewire.user-form');
    }
}
