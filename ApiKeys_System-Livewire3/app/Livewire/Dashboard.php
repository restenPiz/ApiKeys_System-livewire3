<?php

namespace App\Livewire;

use Livewire\Component;

class Dashboard extends Component
{
    //*Declarando as variaveis
    public $isModalOpen=0;

    public function render()
    {
        return view('livewire.dashboard')->layout('layouts.app');
    }
    public function create()
    {
        $this->openModal();
    }
    public function openModal()
    {
        $this->isModalOpen=true;
    }
}
