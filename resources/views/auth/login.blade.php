
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
    <link href="{{ asset('css/StyleLogin.css') }}" rel="stylesheet">
    <script src="https://kit.fontawesome.com/4ae8077f7b.js" crossorigin="anonymous"></script>
   </head>

<body>
    <div class="login-dark">
        <form action="/login"  method="post" onsubmit="return validarCorreoL();">
            @csrf
            
            @include('layouts.partials.messages')       
            <div class="illustration"><i class="icon ion-ios-locked-outline"></i> <h2 class="">Iniciar Sesion</h2></div>
            <div class="form-group"><input class="form-control" type="text" name="username" placeholder="Email"></div>
            <div class="form-group-password-container">
                <input class="form-control" type="password" name="password" placeholder="Password">
                <i class="fa-regular fa-eye-slash  password-toggle"></i>
            </div>
            <div class="form-group"><input class="btn btn-primary btn-block" type="submit" value="Iniciar Sesion"></div>
            <a href="/register" class="forgot">¿No tienes cuenta?</a>
            <br>
            <a href="#" class="forgot">¿Olvidaste tu contraseña?</a>
        </form>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/js/bootstrap.bundle.min.js"></script>
    <script src="{{asset('js/ScriptMostrar.js') }}"></script>
    <script src="{{asset('js/ScriptValidarF.js') }}"></script>
</body>

</html>

