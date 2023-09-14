<?php

namespace App\Livewire;

use App\Models\ApiKeys;
use Livewire\Component;

class Dashboard extends Component
{
    //*Declarando as variaveis
    public $Name,$CreatedBy,$ApiKey,$Status;
    public $isModalOpen=false;

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
    public function closeModal()
    {
        $this->isModalOpen=false;
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

        $this->emit('closeModal');
    }
}
