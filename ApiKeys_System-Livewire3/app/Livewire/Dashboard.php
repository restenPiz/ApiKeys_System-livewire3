<?php

namespace App\Livewire;

use App\Models\ApiKeys;
use Livewire\Component;

class Dashboard extends Component
{
    //*Declaring the variables of the form
    public $name,$createdby,$apikeys,$status;

    //*Inicio da variavel de modal
    public $modalSave=false;

    public function render()
    {
        $keys=ApiKeys::all();

        return view('livewire.dashboard',compact('keys'))->layout('layouts.principal');
    }
    public function save()
    {
        //*Referenciando o meu model
        $table=new ApiKeys();

        $table->Name=$this->name;
        $table->CreatedBy=$this->createdby;
        $table->Status=$this->status;
        $table->ApiKeys=$this->apikeys;

        $table->save();
    }
    public function modalOne()
    {
        $this->modalSave=true;
    }
}
