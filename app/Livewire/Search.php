<?php

namespace App\Livewire;

use Livewire\Component;

class Search extends Component
{
    public $message = '';  // Default message value

    public function render()
    {
        return view('livewire.search');
    }
}
