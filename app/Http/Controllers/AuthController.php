<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function login(){ 
        return view('auth.login');
    }

    public function register(){
        return view('auth.register');
    }

    public function store(){
        
        $validated = request()->validate([
            'name' => 'required|min:3|max:40',
            'email'=>'required|email|unique:users,email',
            'password' => 'required|min:8|confirmed']);

        // creating user detials 
        $user = User::create([
            'name'=> $validated['name'],
            'email'=> $validated['email'],
            'password'=> Hash::make($validated['password'])
        ]);

        // Mail::to($user->email)->send(new RegisterEmail($user));

        // returning the page to homepage after user has registered sucessfully
        return redirect()->route('homepage')->with('sucess','Account created sucessfully !');
    }
}
