<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        // Aquí puedes agregar lógica adicional si es necesario

        return view('index'); // Esto muestra la vista 'index.blade.php'
    }
}
