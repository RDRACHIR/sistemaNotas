<?php
require_once('../../Usuarios/Modelo/Usuarios.php');
require_once('../Modelo/Administradores.php');

$ModeloUsuarios = new Usuario();
$ModeleloAdministradores = new Administradores();

$ModeloUsuarios->validateSession();
$Id = $_GET['Id'];
$Administrador = $ModeleloAdministradores->getById($Id);
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
  <h1>Editar Administrador</h1>
  <form action="../Controladores/edit.php" method="post">
    <div class="form-input">
    <?php
    if ($Administrador != null) {
      foreach ($Administrador as $Info) {
    ?>
    <input type="hidden" name="Id" value="<?php echo $Id;?>">
    Nombre <br>
    <input type="text" name="Nombre" required="" autocomplete="off" placeholder="Nombre" value="<?php echo $Info['NOMBRE']; ?>"> <br><br>
    Apellido <br>
    <input type="text" name="Apellido" required="" autocomplete="off" placeholder="Apellido" value="<?php echo $Info['APELLIDO']; ?>"> <br><br>
    Usuario <br>
    <input type="text" name="Usuario" required="" autocomplete="off" placeholder="Usuario" value="<?php echo $Info['USUARIO']; ?>"> <br><br>
    Clave <br>
    <input type="password" name="Clave" required="" autocomplete="off" placeholder="Clave" value="<?php echo $Info['CLAVE']; ?>"> <br><br>
    Estado <br>
    <select name="Estado" required="" >
      <option value="<?php echo $Info['ESTADO'];?>"><?php echo $Info['ESTADO'];?></option>
      <option value="Activo">Activo</option>
      <option value="Inactivo">Inactivo</option>
    </select> <br><br>
    <?php
      }  
    }
    ?>
    <input class="btn btn-primary" type="submit" value="Editar Administrador">
    </div>
  </form><br>
  <a class="btn btn-primary"  href="index.php">Regresar</a>
</body>
</html>