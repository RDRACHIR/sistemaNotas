<?php
require_once('../../Usuarios/Modelo/Usuarios.php');
require_once('../Modelo/Materias.php');

$ModeloUsuario = new Usuario();
$ModeloUsuario->validateSessionAdministrador();

$ModuloMaterias = new Materias();
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Sistema de Notas</title>
  <link rel="stylesheet" href="../../css/style.css">
  <!-- Fontawesome -->
  <script src="https://kit.fontawesome.com/5a2c53d93e.js" crossorigin="anonymous"></script>
  <!-- Boostrap -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
  <!-- Llamado al header -->
    <?php
    require_once('../../partes/header.php');
    ?>

  <a class="btn btn-primary" href="add.php" >Registrar Materia</a> <br><br>
  <div class="table-responsive" >
  <table class="table table-dark table-striped table-sm">
<tr>
  <th>ID</th>
  <th>NOMBRE</th>
  <th>ACCIONES</th>
</tr>
<?php
$Materias = $ModuloMaterias->get();
if ($Materias != null) {
  foreach ($Materias as $Materia) {
?>
<tr>
  <td><?php echo $Materia['ID_MATERIA'] ?></td>
  <td><?php echo $Materia['MATERIA'] ?></td>
  <td>
    <a href="edit.php?Id=<?php echo$Materia['ID_MATERIA']?>" ><i class="fa-solid fa-file-pen"></i></a>
    <a href="delete.php?Id=<?php echo$Materia['ID_MATERIA']?>" ><i class="fa-solid fa-trash"></i></a>
  </td>
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