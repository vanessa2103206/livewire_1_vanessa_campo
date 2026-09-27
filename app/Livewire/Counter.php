<?php

namespace App\Livewire;

use Livewire\Component;

class Counter extends Component
{
    // Variabile pubblica che tiene in memoria il numero del contatore
    public $count = 0;

    // 1. Azione di "+1"
    public function increment()
    {
        $this->count++;
    }

    // 2. Azione di "-1"
    public function decrement()
    {
        $this->count--;
    }

    // 3. Azione di "+X" (con parametro personalizzato)
    public function incrementBy($value)
    {
        $this->count += $value;
    }

    // 4. Azione di "-X" (con parametro personalizzato)
    public function decrementBy($value)
    {
        $this->count -= $value;
    }

    public function render()
    {
        return view('livewire.counter');
    }
}
