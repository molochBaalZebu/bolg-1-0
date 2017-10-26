<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class UsersController extends Controller
{
    public function show()
    {
        $users = User::all();
        return view('master', ['user' => $users->toArray()]);
    }

    public function showProfile(Request $request, $id)
    {
        return $value = $request->session()->get('key');
    }

}
