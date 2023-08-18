<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/stylelogin.css') }}">
    <title>Login</title>
</head>
<body>
    <div class="login-container">
        <div class="login-box">
            <h1 class="login-heading">Ingrese su cuenta</h1>
            <form class="login-form">
                <input type="text" placeholder="Username or Email" class="login-input">
                <input type="password" placeholder="Password" class="login-input">
                <button type="submit"  class="login-button"><a href="{{route('musica.index')}}">Log In</a></button>
            </form>
            <p class="signup-link">Todavia no tiene cuenta? <a href="{{route('usuario.crear')}}">Sign Up</a></p>
        </div>
    </div>
</body>
</html>

