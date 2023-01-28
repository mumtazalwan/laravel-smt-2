<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public static function register(){
        return view(
            'register.register', [
                'register' => User::all()
            ]
        );
    }

    public static function addUser(request $request){
        $field = $request->validate([
            'name' => 'required|max:255',
            'email' => 'required',
            'password' => 'required',
        ]);

        $field['password'] = Hash::make($field['password']);
        
        User::create($field);
        return redirect('/login')->with('success', 'Data successfuly added');
    }
}
