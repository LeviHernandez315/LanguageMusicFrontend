<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class UsuarioController extends Controller
{
    public function crearUsuario(Request $request)
    {
        $responseTipoMembresia = Http::get('http://localhost:8080/api/tipomeb/obtener');
        $tipoMembresia = $responseTipoMembresia->json();
        
        

        /*

        $response = Http::post('http://localhost:8080/api/usuarios/guardar');
        $data = $response->json();
        */

        //

        return view('sinup', compact('tipoMembresia'));
    }
}
