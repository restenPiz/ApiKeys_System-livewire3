<?php

namespace App\Http\Controllers\apiController;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class dashboardController extends Controller
{
    public function index()
    {
        return view('pages.dashboard');
    }
}
