
 <!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Untitled</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
    <link href="{{asset('css/StyleLogin.css') }}"  rel="stylesheet">
   
</head>

<body>
    <div class="login-dark">
        <form action="/register" method="post">
            @csrf  
            @include('layouts.partials.messages') 
            <div class="illustration"><i class="icon ion-ios-locked-outline"></i><h2>Registro</h2></div>
            <div class="form-group"><input class="form-control" type="text" name="nombre" placeholder="Nombre"></div>
            <div class="form-group"><input class="form-control" type="text" name="apellido" placeholder="Apellidos"></div>
            <div class="form-group"><input class="form-control" type="text" name="cedula" placeholder="Cedula"></div>
            <div class="form-group"><input class="form-control" type="email" name="email" placeholder="Email"></div>
            <div class="form-group"><input class="form-control" type="password" name="password" placeholder="Contraseña"></div>
            <div class="form-group"><input class="form-control" type="password" name="password_confirmation" placeholder="Confirme contraseña"></div>
            <div class="form-group"><input class="btn btn-primary btn-block" value="Registrar"type="submit"></div>
            <a href="/login" class="forgot">¿Ya tienes una cuenta, Inicia Sesion?</a></form>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/js/bootstrap.bundle.min.js"></script>
</body>

</html>
