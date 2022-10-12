<?php
require_once('../../Usuarios/Modelo/Usuarios.php');
require_once('../Modelo/Administradores.php');

$ModeloUsuario = new Usuario();
$ModeloAdministradores = new Administradores();

$ModeloUsuario->validateSessionAdministrador();
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
  <!-- Fontawesome -->
  <script src="https://kit.fontawesome.com/5a2c53d93e.js" crossorigin="anonymous"></script>
</head>
<body>
  <?php
require_once('../../partes/header.php');
?>
  <a class="btn btn-primary"  href="add.php">Registrar Administrador</a> <br><br>
  <div class="table-responsive">
  <table class="table table-dark table-striped table-sm">
    <tr>
      <th>ID</th>
      <th>Nombre</th>
      <th>Apellido</th>
      <th>Usuario</th>
      <th>Perfil</th>
      <th>Estado</th>
      <th>Acciones</th>
    </tr>
    <?php
    $Administradores = $ModeloAdministradores->get();
    if ($Administradores != null) {
      foreach ($Administradores as $Administrador) {
    ?>
    <tr>
      <th><?php echo $Administrador['ID_USUARIO'] ?></th>
      <th><?php echo $Administrador['NOMBRE'] ?></th>
      <th><?php echo $Administrador['APELLIDO'] ?></th>
      <th><?php echo $Administrador['USUARIO'] ?></th>
      <th><?php echo $Administrador['PERFIL'] ?></th>
      <th><?php echo $Administrador['ESTADO'] ?></th>
      <th>
        <a href="edit.php?Id=<?php echo $Administrador['ID_USUARIO']?>" ><i class="fa-solid fa-file-pen"></i></a>
        <a href="delete.php?Id=<?php echo $Administrador['ID_USUARIO']?>"><i class="fa-solid fa-trash"></i></a>
      </th>
    </tr>
    <?php
      }  
    }
    ?>
  </table>
  </div>
</body>
</html>