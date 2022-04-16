<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class ControllerUser extends Controller
{
    function login(){
        return view('login');
    }

    function criar_conta(){
        return view('criar_conta');
    }

    function adduser(Request $request){

        $user = User::create([
            'name'=>$request->name,
            'email'=>$request->email,
            'password'=>hash::make($request->password),
        ]);

        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            return redirect()->route('index');
            // dd("bem vindo");
            // $save['success']=true;
            // return json_encode($save);
        }
    }

     function logout(Request $request){
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect()->route('index');
    }

    function entrar(Request $request){
        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            return redirect()->route('index');
        }else{
            dd("login ou senha invalido");
        }
    }
}
