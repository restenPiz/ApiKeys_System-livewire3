<?php

namespace App\Livewire;

use App\Models\ApiKeys;
use Livewire\Component;

class Dashboard extends Component
{
    //*Declarando as variaveis
    public $Name,$CreatedBy,$ApiKey,$Status;

    public function render()
    {
        return view('livewire.dashboard')->layout('layouts.app');
    }
    //*Inicio do metodo para salvar os dados
    public function store()
    {
        $table=new ApiKeys();

        $table->Name=$this->Name;
        $table->CreatedBy=$this->CreatedBy;
        $table->ApiKey=$this->ApiKey;
        $table->Status=$this->Status;

        $table->save();

        session()->flash('message','The apikey was added with successfuly');

        $this->dispatch('closeModal');
    }
}
