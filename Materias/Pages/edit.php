<?php
require_once('../../Usuarios/Modelo/Usuarios.php');
require_once('../Modelo/Materias.php');

$ModeloUsuarios = new Usuario();
$ModeloUsuarios->validateSession();

$Modelo = new Materias();
$Id = $_GET['Id'];
$InformacionMateria = $Modelo->getById($Id);
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
  <h1>Editar Materia</h1>
  <form action="../Controladores/edit.php" method="post">
    <div class="form-input">
    <input type="hidden" name="Id" value="<?php  echo $Id;?>">
    <?php 
    if ($InformacionMateria != null) {
      foreach ($InformacionMateria as $Info) {
    ?>
    Nombre <br>
    <input type="text" name="Materia" required="" autocomplete="off" palceholder="Nombre Materia" value="<?php echo $Info['MATERIA']?>"> <br><br>
    <?php
      } 
    }
    ?>
    <input class="btn btn-primary" type="submit" value="EditarMateria">
  </div>
  </form><br>
  <a class="btn btn-primary" href="index.php">Regresar</a>
</body>
</html>