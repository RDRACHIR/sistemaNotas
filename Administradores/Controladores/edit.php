<?php
require_once('../Modelo/Administradores.php');

if ($_POST) {
  $ModeloAdministradores = new Administradores();

  $Id = $_POST['Id'];
  $Nombre = $_POST['Nombre'];
  $Apellido = $_POST['Apellido'];
  $Usuario = $_POST['Usuario'];
  $Clave = $_POST['Clave'];
  $Estado = $_POST['Estado'];
  $ModeloAdministradores->update($Id, $Nombre, $Apellido, $Usuario, $Clave, $Estado);
}else {
  header('Location: ../../index.php');
}
?>