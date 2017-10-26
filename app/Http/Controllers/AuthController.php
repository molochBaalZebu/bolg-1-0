<?php

use Illuminate\Routing\Controller as BaseController;

class AuthController extends BaseController
{
    public function showLogin()
    {
        if (Auth::check())
        {
            return Redirect::to('/');
        }
        return View::make('login');
    }

    public function postLogin()
    {
        $data = [
            'email' => Input::get('email'),
            'password' => Input::get('password')
        ];

        if (Auth::attempt($data, Input::get('remember')))
        {
            return Redirect::intended('/');
        }
        return Redirect::back()->with('error_message', 'Datos incorrectos')->withInput();
    }


    public function logOut()
    {
        Auth::logout();
        return Redirect::to('login')->with('error_message', 'Se ha cerrado la sesión');
    }
}