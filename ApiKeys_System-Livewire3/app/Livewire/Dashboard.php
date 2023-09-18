<?php

namespace App\Livewire;

use App\Models\ApiKeys;
use Livewire\Component;
use Livewire\WithPagination;

class Dashboard extends Component
{
    //*Declarando as variaveis
    public $id,$Name,$CreatedBy,$ApiKey,$Status;
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
        session()->save();

        $this->clearInputs();
        $this->dispatch('closeModal');
        $this->dispatch('show-temp-alert');
    }
    //*Inicio do metodo para limpar os inputs
    public function clearInputs()
    {
        $this->Name='';
        $this->CreatedBy='';
        $this->ApiKey='';
        $this->Status='';
    }
    //*Inicio do metodo para eliminar os dados
    public function delete($id)
    {
        // $key=ApiKeys::find($id);

        // $key->delete();

        // session()->flash('delete','The api key was deleted with successfuly');

        // $this->dispatch('show-temp-alert');
        dd($id);
    }
}
