<?php

namespace App\Livewire;

use App\Http\Requests\Auth\LoginRequest;
use App\Providers\RouteServiceProvider;
use Livewire\Component;
use Symfony\Component\HttpFoundation\RedirectResponse;

class Login extends Component
{
    public $redirectToSignUp=false;
    public function render()
    {
        return view('livewire.login')->layout('layouts.app');
    }
    public function store(LoginRequest $request): RedirectResponse
    {
        $request->authenticate();

        $request->session()->regenerate();

        return redirect()->intended(RouteServiceProvider::HOME);
    }
    //*Metodo para redirecionar para a tela de signup
    public function signUp()
    {
        $this->redirectToSignUp=true;
    }
}
