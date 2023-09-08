<?php

namespace App\Livewire;

use Illuminate\Http\Request;
use App\Http\Requests\Auth\LoginRequest;
use App\Providers\RouteServiceProvider;
use Livewire\Component;
use Symfony\Component\HttpFoundation\RedirectResponse;

class Login extends Component
{
    public $redirectToSignUp = false;
    public $redirectToDash = false;
    public $request;

    public function __construct(Request $request)
    {
        parent::__construct();
        $this->request = $request;
    }

    public function render()
    {
        return view('livewire.login')->layout('layouts.app');
    }

    public function store()
    {
        $this->request->validate([
            // Coloque suas regras de validação aqui
        ]);

        // Outro código relacionado ao login...

        $this->redirectToDash = true;
    }

    // Método para redirecionar para a tela de signup
    public function signUp()
    {
        $this->redirectToSignUp = true;
    }
}
