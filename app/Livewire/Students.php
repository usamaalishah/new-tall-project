<?php

namespace App\Livewire;

use Livewire\Component;

class Students extends Component
{
    public $students = ['usama', 'usama 1', 'usama 2', 'usama 3'];

    public function render()
    {
        return view('livewire.students');
    }
}
