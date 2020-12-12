<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostsController extends Controller
{
    public function login()
    {
        $data = ['email' => '', 'password' => ''];
        return view('login', $data);
    }

    public function post(Request $request)
    {
        //入力された値を受け取る
        $email = $request->email;
        $password = $request->password;
        $userName = $request->userName;
        $confirmPassword = $request->confirmPassword;


        $data = ['email' => $email, 'password' => $password, 'userName' => $userName, 'confirmPassword' => $confirmPassword];

        if ($request->path() === 'login') {
            return view('register', $data);
        } elseif ($request->path() === 'register') {
            return view('login', $data);
        }
    }

    public function register()
    {
        $data = ['email' => '', 'password' => '',];
        return view('register', $data);
    }
}
