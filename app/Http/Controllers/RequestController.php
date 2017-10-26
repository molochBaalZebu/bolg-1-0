<?php

class RequestController extends Controller
{
    public function registrar(Request $request)
    {
        $metodo = $request->method();
        $nombre = $request->input("name");
        $correo = $request->input("email");
        $password = $request->input("password");
    }
}