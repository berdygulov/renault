<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\LoginRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function __invoke(LoginRequest $request)
    {

        $credentials['email'] = $request->input('email');
        $credentials['password'] = $request->input('password');

        if (Auth::attempt($credentials, false)) {

            $request->session()->regenerate();

            return redirect()->route('backend.index');
        }
        return back()->withErrors([
            'login' => 'Предоставленные учетные данные не соответствуют.'
        ], 'login');
    }
}
