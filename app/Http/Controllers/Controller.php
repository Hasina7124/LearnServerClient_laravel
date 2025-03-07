<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Requests\RegisterUserRequest;
use App\Http\Models\User;

abstract class Controller
{
    public function create(RegisterUserRequest $request)
    {
        $data = $request->validated();

        $user = new User($data);

        $user->save();
    }
}
