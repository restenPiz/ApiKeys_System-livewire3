<?php

namespace App\Livewire;

use App\Http\Requests\Auth\LoginRequest;
use App\Providers\RouteServiceProvider;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use Symfony\Component\HttpFoundation\RedirectResponse;

/**
 * Summary of Login
 */
class Login extends Component
{
    public $redirectToSignUp = false;
    public $redirectToDash = false;

    public $email, $password;

    public function render()
    {
        return view('livewire.login')->layout('layouts.app');
    }
    public function store()
    {
        $credentials = [
            'email' => $this->email,
            'password' => $this->password,
        ];

        if (Auth::attempt($credentials)) {
            // O usuário está autenticado com sucesso
            $this->redirectToDash = true;
            session()->flash('message', 'Login bem-sucedido!');// Redirecionar para a página de painel após o login
        } else {
            session()->flash('error', 'Credenciais inválidas. Tente novamente.');
        }

    }

    // Método para redirecionar para a tela de signup
    public function signUp()
    {
        $this->redirectToSignUp = true;
    }
}
