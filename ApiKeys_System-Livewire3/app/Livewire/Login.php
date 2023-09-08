<?php

namespace App\Livewire;

use App\Http\Requests\Auth\LoginRequest;
use App\Providers\RouteServiceProvider;
use Livewire\Component;
use Symfony\Component\HttpFoundation\RedirectResponse;

class Login extends Component
{
    public $redirectToSignUp=false;
    public $redirectToDash=false;
    public LoginRequest $request;
    public function render()
    {
        return view('livewire.login')->layout('layouts.app');
    }
    public function store()
    {
        $this->request->authenticate();

        $this->request->session()->regenerate();

        $this->redirectToDash=true;
    }
    //*Metodo para redirecionar para a tela de signup
    public function signUp()
    {
        $this->redirectToSignUp=true;
    }
}
