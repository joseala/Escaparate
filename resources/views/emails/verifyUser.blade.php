<!DOCTYPE html>
<html>
<head>
    <title>Email de bienvenida</title>
</head>
 
<body>
<h2>Bienvenido {{$user['name']}} a la web de 4GFlota.</h2>
<br/>
Tu email es {{$user['email']}} , Porfavor haga click en el link para verifivar su cuenta.
<br/>
<a href="{{url('user/verify', $user->verifyUser->token)}}">Verificar Email</a>
</body>
 
</html>