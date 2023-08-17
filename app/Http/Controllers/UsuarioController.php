<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class UsuarioController extends Controller
{
    public function crear(Request $request)
    {
        $response = Http::post('http://localhost:8080/api', [
            '' => $request->input('nombre'),
            '' => $request->input('apellido'),
            '' => $request->input('email'),
            '' => $request->input('password'),
            '' => $request->input('numeroTarjeta'),
            '' => $request->input('cvv')
            // '' => $request->input('')
        ]);

        return redirect()->route('artistas.crear');
    }
}
