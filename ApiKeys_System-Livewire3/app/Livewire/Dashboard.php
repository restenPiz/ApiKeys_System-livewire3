<?php

namespace App\Livewire;

use Livewire\Component;

class Dashboard extends Component
{
    public function render()
    {
        ///?incio do metodo que retorna a dashboard
        return view('livewire.dashboard')->layout('layouts.principal');
    }
}
