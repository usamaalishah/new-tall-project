<?php

namespace App\Livewire;

use Livewire\Component;

class Actions extends Component
{

    public $message = '';

    public function formSubmit(){
        $this->message = "Form Submitted Successfully!";
    }
    public function render()
    {
        return view('livewire.actions');
    }
}
