<?php

namespace App\Livewire;

use Livewire\Component;

class Counter extends Component
{
    public $livewirekamessage;
    
    public function mount(){
        $this->livewirekamessage = "This is mount message from the Counter - Livewire!";
    }
    public $count = 0;


    public function increment()
    {
        $this->count++;
    }

    public function decrement()
    {
        $this->count--;
    }

    public function render()
    {
        return view('livewire.counter');
    }
}
