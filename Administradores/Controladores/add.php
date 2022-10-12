<?php
require_once('../Modelo/Administradores.php');

if ($_POST) {
  
  $ModeloAdministradores = new Administradores();

  $Nombre = $_POST['Nombre'];
  $Apellido = $_POST['Apellido'];
  $Usuario = $_POST['Usuario'];
  $Clave = $_POST['Clave'];
  $ModeloAdministradores->add($Nombre, $Apellido, $Usuario, $C);
}else {
  header('Location: ../../index.php');
}
?>