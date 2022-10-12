<?php
require_once('../../Usuarios/Modelo/Usuarios.php');
$ModeloUsuarios = new Usuario();
?>

<header>
  <?php
if ($ModeloUsuarios->getPerfil() == 'Docente') {
  ?>
    <h2>
    <a class="btn btn-primary" href="#">Estudiantes</a> 
    <a class="btn btn-primary" href="../../Usuarios/Controladores/Salir.php">Salir</a>
  </h2>
  <?php
}else {
  ?>
    <ul class="nav nav-pills nav-es">
      <li class="nav-item">
    <a class="nav-link active" href="../../Administradores/Pages/index.php">Administradores</a> 
    </li>
    <li class="nav-item">
    <a class="nav-link active" href="../../Docentes/Pages/index.php">Docentes</a> 
    </li>
    <li class="nav-item">
    <a class="nav-link active" href="../../Materias/Pages/index.php">Materias</a> 
    </li>
    <li class="nav-item">
    <a class="nav-link active" href="../../Estudiantes/Pages/index.php">Estudiantes</a> 
    </li>
    <li class="nav-item">
    <a class="nav-link active" href="../../Usuarios/Controladores/Salir.php">Salir</a>
    </li>
    </ul>
<?php
}
?>

<h3>Bienvenido: <?php echo $ModeloUsuarios->getNombre();?> - <?php echo $ModeloUsuarios->getPerfil();?></h3>
</header>