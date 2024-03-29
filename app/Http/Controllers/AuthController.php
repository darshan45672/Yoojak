<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class AuthController extends Controller
{
    public function register()
    {
        return view('auth.register');
    }

    public function store()
    {

        $validated = request()->validate([
            'name' => 'required|min:3|max:40',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|min:8|confirmed'
        ]);

        $user = User::create([
            'name' => $validated['name'],
            'email' => $validated['email'],
            'password' => Hash::make($validated['password'])
        ]);

        return redirect()->route('home')->with('sucess', 'accounts created sucessfully!');
    }

    public function login()
    {
        return view('auth.login');
    }

    public function authenticate()
    {
        $validated = request()->validate([
            'email' => 'required|email',
            'password' => 'required|min:8'
        ]);

        if (auth()->attempt($validated)) {
            request()->session()->regenerate();

            return redirect()->route('home')->with('sucess', 'Logged in sucessfully !');
        }
        return redirect()->route('login')->withErrors(['email' =>"no user found",]);
    }

    public function logout(){
        auth()->logout();
        request()->session()->invalidate();
        request()->session()->regenerateToken();

        return redirect()->route('home')->with('sucess','Logged out sucessfully !');
    }

    public function show(){
        $id = Auth::user()->id;
        $user = User::where('id',$id)->first();

        return view('user.userProfileShow', [
            'user' => $user
        ]);
    }

    public function edit(User $user){
        return view('user.userProfileEdit', compact('user'));
    }

    public function update(Request $request){
        $id = Auth::user()->id;
        $validator = Validator::make($request->all(),[
            'name' => 'required|min:4|max:20',
            'email'=> 'required|email|unique:users,email,'.$id.',id',
            'usn'=> 'required|min:9|max:10|unique:users,usn,'.$id.',id',
            'mobile' =>'required|min:10|max:10',
            'branch' => 'required|min:3|max:20'
        ]);    

        if($validator->passes()){
            $user = User::find($id);
            $user->name= $request->name;
            $user->email= $request->email;
            $user->usn= $request->usn;
            $user->branch= $request->branch;
            $user->mobile= $request->mobile;
            $user->save();

            session()->flash('success','profile updated sucessfully');

            return response()->json([
                'status' => true,
                'errors' =>[]
            ]);

        }else{
            return response()->json([
                'status' => false,
                'errors' => $validator->errors()
            ]);
        }
    }
}
