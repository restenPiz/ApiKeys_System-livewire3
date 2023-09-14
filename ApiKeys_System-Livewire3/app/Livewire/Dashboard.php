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
        $keys=ApiKeys::all();

        return view('livewire.dashboard',compact('keys'))->layout('layouts.app');
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

        $this->clearInputs();
        $this->dispatch('closeModal');
    }
    //*Inicio do metodo para limpar os inputs
    public function clearInputs()
    {
        $this->Name='';
        $this->CreatedBy='';
        $this->ApiKey='';
        $this->Status='';
    }
}
