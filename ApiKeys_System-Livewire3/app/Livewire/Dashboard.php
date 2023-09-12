<?php

namespace App\Livewire;

use App\Models\ApiKeys;
use Livewire\Component;

class Dashboard extends Component
{
    //*Declaring the variables of the form
    public $name,$createdby,$apikeys,$status;
    public function render()
    {
        $keys=ApiKeys::all();

        return view('livewire.dashboard',compact('keys'))->layout('layouts.principal');
    }
}
