<?php

namespace App\Livewire;

use Livewire\Component;

class Signup extends Component
{
    public $redirectToSignIn=false;
    public function render()
    {
        return view('livewire.signup')->layout('layouts.app');
    }
    public function signIn()
    {
        $this->redirectToSignIn=true;
    }
}
