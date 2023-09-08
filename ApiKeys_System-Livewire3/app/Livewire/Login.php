<?php

namespace App\Livewire;

use App\Http\Requests\Auth\LoginRequest;
use App\Providers\RouteServiceProvider;
use Livewire\Component;
use Symfony\Component\HttpFoundation\RedirectResponse;

class Login extends Component
{
    public $redirectToSignUp = false;
    public $redirectToDash = false;
    public $request;

    // Método para inicializar a propriedade $request
    private function initializeRequest()
    {
        $this->request = new LoginRequest();
    }

    public function render()
    {
        return view('livewire.login')->layout('layouts.app');
    }

    public function store()
    {
        $this->initializeRequest(); // Inicialize a propriedade $request antes de usá-la

        $this->request->authenticate();

        $this->request->session()->regenerate();

        $this->redirectToDash = true;
    }

    // Método para redirecionar para a tela de signup
    public function signUp()
    {
        $this->initializeRequest(); // Inicialize a propriedade $request antes de usá-la

        $this->redirectToSignUp = true;
    }
}
