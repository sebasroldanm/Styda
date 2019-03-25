<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        $users = [
            'juan',
            'pedro',
            'matilda',
            'jesus',
            'camilo',
            'sebastian',
            'camila',
            '<h1>',
        ];

    	return view('users', [
            'users' => $users,
            'title' => 'Listado de Usuarios'
        ]);
    }

    public function show($id)
    {
    	return "Mostrando detalles del usuario: {$id}";
    }

    public function create()
    {
    	return 'Crear nuevo usuario';
    }

}

