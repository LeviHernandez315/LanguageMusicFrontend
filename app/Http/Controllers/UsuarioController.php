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
        
        $mensaje = "";

        /*

        $response = Http::post('http://localhost:8080/api/usuarios/guardar');
        $data = $response->json();
        */

        //

        return view('sinup', compact('mensaje','tipoMembresia'));
    }

    public function validarCampos(Request $request){
        $responseTipoMembresia = Http::get('http://localhost:8080/api/tipomeb/obtener');
        $tipoMembresia = $responseTipoMembresia->json();

        $nombre = $request->input('nombre');
        $apellido = $request->input('apellido');
        $email = $request->input('email');
        $password = $request->input('password');
        $confPassword = $request->input('confPassword');
        
        $valorSeleccionado = $request->input('tipo-de-membresia');

        if(
            !$request->filled('nombre') or 
            !$request->filled('apellido') or
            !$request->filled('email') or
            !$request->filled('password') or
            !$request->filled('confPassword')
        )
        {
            $mensaje = "llenar todos los campor porfavor";
            return view('sinup', compact('mensaje', 'tipoMembresia'));
        }
        else{
            if($password != $confPassword){
                $mensaje = "Contrasenia no coincide con la confirmacion de contrasenia";
                return view('sinup', compact('mensaje', 'tipoMembresia'));
            }
            if(!$request->filled('numeroTarjeta') or
            !$request->filled('cvv')){
                $mensaje = "Ingrese tarjeta y sus campos";
                return view('sinup', compact('mensaje', 'tipoMembresia'));
            }
            return redirect()->route('usuario.guardar');
            
        }
    }

    function guardarUsuario(Request $request){
        $response = Http::post('http://localhost:8080/api/usuarios/guardar', [
            'nombre' => $request->input('nombre'),
            'apellido' => $request->input('apellido'),
            'email' => $request->input('email'),
            'password'=>$request->input('password')
        ]);
        return redirect()->route('musica.index');
    }
}
