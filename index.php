<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Sistema de Notas</title>
  <link rel="stylesheet" href="css/bootstrap/bootstrap.min.css">
  <link rel="stylesheet" href="css/signin.css">
</head>
<body>
  <main class="form-signin w-100 m-auto">
    <div class="logo">
  <img class="logo-img mb-4" src="img/escudo.jpg" alt="logo" >
  </div>
  <h1 class="h3 mb-3 fw-normal">Inicio de Sesion</h1>
  <form action="Usuarios/Controladores/Login.php" method="post">
    <div class="form-floating">
    Usuario <br>
    <input class="form-control" type="text" name="Usuario" required="" autocomplete="off" placeholder="Usuario" > 
    Contraseña <br>
    <input class="form-control" type="password" name="Contrasena" required="" autocomplete="off" placeholder="Contraseña">
    </div>
    <input class="w-100 btn btn-lg btn-primary" type="submit" value="Inicia Sesión">
  </form>
</main>
</body>
</html>