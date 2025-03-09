<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
// use Illuminate\Http\Request;

use App\Http\Requests\RequestLoginController;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function login(RequestLoginController $request)
    {
        $data = $request->validated();

        if(Auth::attempt($data))
        {
            echo 'login successful';
        }
    }
}
