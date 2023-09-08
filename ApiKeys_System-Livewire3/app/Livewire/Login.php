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
    public $request; // Removendo a tipagem no nível da propriedade
    public function __construct()
    {
        // Inicializando a propriedade $request no construtor
        $this->request = new LoginRequest();
    }
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
