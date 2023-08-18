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

    public function validarCampos(Request $request){
        
        $nombre = $request->input('nombre');
        $apellido = $request->input('apellido');
        $email = $request->input('email');
        $password = $request->input('password');
        $confPassword = $request->input('confPassword');
        
        if($password != $confPassword){
            return redirect()->route('usuario.crear');
        }
        else{
            return view('musica');
        }
    }
}
