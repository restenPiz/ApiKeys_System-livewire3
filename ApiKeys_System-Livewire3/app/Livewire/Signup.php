<?php

namespace App\Livewire;

use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use Illuminate\View\View;
use Livewire\Component;

class Signup extends Component
{
    public $name,$email,$password, $user;
    public $redirectToSignIn=false;
    public function render()
    {
        return view('livewire.signup')->layout('layouts.app');
    }
    public function signIn()
    {
        $this->redirectToSignIn=true;
    }
    public function store()
    {
        //*Inicio do metodo de validacao
        
        $this->validate([
            'name'=>'required',
            'email'=>'required|email',
            'password'=>'required',
        ]);

        $user = User::create([
            'name' => $this->name,
            'email' => $this->email,
            'password' => Hash::make($this->password),
        ]); 

        event(new Registered($user));

        Auth::login($user);

    }
}
