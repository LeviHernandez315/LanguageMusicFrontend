<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/stylesign.css') }}">
    <title>Sign Up</title>

    <style>
        
    </style>
</head>
<body>
    <div class="signup-container">
        <p id="mensaje" style="color: red;">{{$mensaje}}</p>
        <div class="signup-box">
            <h1 class="signup-heading">Crea una nueva cuenta</h1>
            <form method="POST" action="{{route('validar.campos')}}" class="signup-form">
                @csrf
                <input id="nombre" name="nombre" type="text" placeholder="nombre" class="signup-input">
                <input id="apellido" name="apellido" type="text" placeholder="apellido" class="signup-input">
                <input id="email" name="email" type="text" placeholder="Email" class="signup-input">
                <input id="password" name="password" type="password" placeholder="Password" class="signup-input">
                <input id="confPassword" name="confPassword" type="password" placeholder="Confirm Password" class="signup-input">
                <select id="tipo-de-membresia" name="tipo-de-membresia" class="signup-input">
                    @foreach ($tipoMembresia as $tipo)
                        <option value="{{$tipo['idTipoMembresia']}}">{{$tipo['nombre']}}</option>
                    @endforeach
                    <!-- Agrega más opciones aquí -->
                </select>

                <input id="numeroTarjeta" name="numeroTarjeta" type="text" placeholder="escriba numero de tarjeta" class="signup-input">
                <div class="contenedor-fecha">

                

                    <div class="">
                       
                        <input  type="text" class="signup-input" id="cvv" name="cvv" placeholder="CVV">
                    </div>



                    </div>
                
                <button type="submit" class="signup-button">Sign Up</button>
            </form>

            

            <p class="login-link">Ya tiene una cuenta? <a href="{{route('login.index')}}">Log In</a></p>
        </div>
    </div>
</body>
</html>