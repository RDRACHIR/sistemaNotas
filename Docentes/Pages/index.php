<?php
require_once('../../Usuarios/Modelo/Usuarios.php');
require_once('../Modelo/Docentes.php');

$ModeloUsuarios = new Usuario();
$ModeloUsuarios->validateSessionAdministrador();

$ModeloDocentes = new Docentes();
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
  
  <a class="btn btn-primary"  href="add.php">Registrar Docente</a> <br><br>
  <div class="table-responsive">
  <table class="table table-dark table-striped table-sm">
    <tr>
      <th>ID</th>
      <th>Nombre</th>
      <th>Apellido</th>
      <th>Usuario</th>
      <th>Clave</th>
      <th>Perfil</th>
      <th>Estado</th>
      <th>Acciones</th>
    </tr>
    <?php
    $Docentes = $ModeloDocentes->get();
    if ($Docentes != null) {
      foreach ($Docentes as $Docente) {
    ?>
    <tr>
      <th><?php echo $Docente['ID_USUARIO'] ?></th>
      <th><?php echo $Docente['NOMBRE'] ?></th>
      <th><?php echo $Docente['APELLIDO'] ?></th>
      <th><?php echo $Docente['USUARIO'] ?></th>
      <th><?php echo $Docente['CLAVE'] ?></th>
      <th><?php echo $Docente['PERFIL'] ?></th>
      <th><?php echo $Docente['ESTADO'] ?></th>
      <th>
        <a href="edit.php?Id=<?php  echo $Docente['ID_USUARIO']?>" ><i class="fa-solid fa-file-pen"></i></a>
        <a href="delete.php?Id=<?php  echo $Docente['ID_USUARIO']?>" ><i class="fa-solid fa-trash"></i></a>
      </th>
    </tr>
<?php
      }  
    }
?>
  </table>
  </div>


  <!-- Bootstrap -->
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>