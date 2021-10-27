<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class RegisterController extends Controller
{
    public function index()
    {
        return view('register.index', [
            'title' => 'register'
        ]);
    }

    public function store(Request $request)
    {
        $validateData = $request->validate([
            'name' => 'required|max:255|min:5',
            'username' => 'required|unique:users|max:16|min:5',
            'email' => 'required|unique:users|email:dns',
            'password' => 'required|min:4|max:16'
        ]);
        
    $validateData['password'] = Hash::make($validateData['password']);

    User::create($validateData);

    return redirect('login')->with('success', 'Register was Successfully');

    }
}
