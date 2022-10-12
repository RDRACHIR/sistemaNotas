<?php
require_once('../../Usuarios/Modelo/Usuarios.php');
require_once('../../Metodos.php');

$ModeloUsuarios = new Usuario();
$ModeloUsuarios->validateSession();

$ModeloMetodos = new Metodos();
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
  <h1>Registrar Estudiante</h1>
  <form action="../Controladores/add.php" method="post">
    <div class="mb-3 form-input">
    Nombre <br>
    <input type="text" name="Nombre" required="" autocomplete="off" placeholder="Nombre"> <br><br>
    Apellido <br>
    <input type="text" name="Apellido" required="" autocomplete="off" placeholder="Apellido"> <br><br>
    Documento <br>
    <input type="text" name="Documento" required="" autocomplete="off" placeholder="Documento"> <br><br>
    Correo <br>
    <input type="email" name="Correo" required="" autocomplete="off" placeholder="Correo"> <br><br>
    Materia <br>
    <select name="Materia" requered id="">
      <option>Seleccione</option>
      <?php
      $Materias = $ModeloMetodos->getMaterias();
      if ($Materias != null) {
        foreach ($Materias as $Materia) {
          ?>
      <option value="<?php echo $Materia['MATERIA'] ?>" ><?php echo $Materia['MATERIA'] ?> </option>
        <?php
        }
      }
      ?>
    </select> <br><br>
    Docente <br>
    <select class="form-select" name="Docente"  required id="">
      <option>Seleccione</option>
      <?php
        $Docentes = $ModeloMetodos->getDocentes();
        if ($Docentes != null) {
          foreach ($Docentes as $Docente) {
            ?>
            <option value="<?php echo $Docente['NOMBRE'] . ' ' . $Docente['APELLIDO']?>"><?php echo $Docente['NOMBRE'] . ' ' . $Docente['APELLIDO']?></option>
            <?php
          }
        }
      ?>
    </select> <br><br>
    Promedio <br>
    <input type="number"  name="Promedio" required autocomplete="off" placeholder="Promedio"> <br><br>
    <input class="btn btn-primary" type="submit" value="Registrar Estudiante"> 
  </form><br>
      </div>
  <a class="btn btn-primary" href="index.php">Regresar</a>
</body>
</html>