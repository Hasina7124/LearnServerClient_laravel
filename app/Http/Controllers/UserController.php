<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\RegisterUserRequest;
use App\Http\Requests\UpdateUserRequest;
use App\Models\User;

use Illuminate\Http\JsonResponse;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $user = User::all();

        return response()->json(['user' => $user]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request)
    {
        // 
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(RegisterUserRequest $request)
    {
        $data = $request->validated();

        $user = new User($data);

        $user->save();

        return response()->json([
            'message' => "User created successfuly",
        ],200);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $users = User::find($id);

        return response()->json([
            'user' => $user,
        ], 200);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(UpdateUserRequest $request, string $id)
    {
        // 
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateUserRequest $request, string $id)
    {
        $user = User::find($id)->update($request->validated());

        return response()->json([
            'message' => "User updated successfuly",
        ], 200);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $users = User::all();

        $user = $users->find($id);

        $user->delete();

        return response()->json([
            'message' => "User deleted successfuly",
        ], 200);
    }
}
