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
    public function store(Request $request): RedirectResponse
    {
        

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]); 

        event(new Registered($user));

        Auth::login($user);

    }
}
