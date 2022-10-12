<?php
require_once('../../Usuarios/Modelo/Usuarios.php');

$ModeloUsuarios = new Usuario();
$ModeloUsuarios->validateSession();
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Sistema de Notas</title>
    <link rel="stylesheet" href="../../css/style.css">
  <!-- Boostrap -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
  <h1>Registrar Docente</h1>
  <form action="../Controladores/add.php" method="post">
    <div class="form-input">
    Nombre <br>
    <input type="text" name="Nombre" required="" autocomplete="off" placeholder="Nombre"> <br><br>
    Apellido <br>
    <input type="text" name="Apellido" required="" autocomplete="off" placeholder="Apellido"> <br><br>
    Usuario <br>
    <input type="text" name="Usuario" required="" autocomplete="off" placeholder="Usuario"> <br><br>
    Clave <br>
    <input type="password" name="Clave" required="" autocomplete="off" placeholder="Clave"> <br><br>
    <input class="btn btn-primary" type="submit" value="Registrar Docente">
    </div>
  </form><br>
  <a class="btn btn-primary" href="index.php">Regresar</a>
</body>
</html>