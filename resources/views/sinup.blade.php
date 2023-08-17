<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/stylesign.css') }}">
    <title>Sign Up</title>
</head>
<body>
    <div class="signup-container">
        <div class="signup-box">
            <h1 class="signup-heading">Crea una nueva cuenta</h1>
            <form class="signup-form">
                <input type="text" placeholder="Email" class="signup-input">
                <input type="password" placeholder="Password" class="signup-input">
                <input type="password" placeholder="Confirm Password" class="signup-input">
                <input type="text" placeholder="nombre" class="signup-input">
                <input type="text" placeholder="apellido" class="signup-input">
                <select  class="signup-input" name="tipo-de-membresia">
                <option   class="signup-input" value="usa">Premium</option>
                <option  class="signup-input" value="canada">black</option>
                <!-- Agrega más opciones aquí -->
                </select>
               
                <input type="text" placeholder="escriba numero de tarjeta" class="signup-input">
                <div class="contenedor-fecha">

                
                    <div class="">
                    
                        <input type="text" class="signup-input" id="expira" placeholder="Expira">
                    </div>

                    <div class="">

                      
                        <input type="text" class="signup-input" id="mes" placeholder="Mes">
                    </div>

                    <div class="">
                       
                        <input type="text" class="signup-input" id="cvv" placeholder="CVV">
                    </div>



                    </div>
                
                <button type="submit" class="signup-button">Sign Up</button>
            </form>
            <p class="login-link">Ya tiene una cuenta? <a href="{{route('login.index')}}">Log In</a></p>
        </div>
    </div>
</body>
</html>