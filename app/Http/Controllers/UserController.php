<?php

namespace App\Http\Controllers;

use App\Models\User;

class UserController extends Controller
{
    public function index()
    {
        $user = User::all();
        return response()->json($user);
    }

    public function show(int $id)
    {
        return auth()->loginUsingId($id);
    }

    public function find(string $user)
    {
        $userid = User::select('id')->where('username', $user)->first();
        return $userid;
    }

    public function create()
    {
        return view('index');
    }
}
