<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;
use Illuminate\Support\Facades\Password;

class LoginController extends Controller
{
    public function home()
    {
        return view("auth.home");
    }
    /**
     * Display login page.
     *
     * @return Renderable
     */
}
   