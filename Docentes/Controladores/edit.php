<?php
require_once('../Modelo/Docentes.php');

$ModeloDocentes = new Docentes();
if ($_POST) {
  $Id = $_POST['Id'];
  $Nombre = $_POST['Nombre'];
  $Apellido = $_POST['Apellido'];
  $Usuario = $_POST['Usuario'];
  $Clave  = $_POST['Clave'];
  $Estado  = $_POST['Estado'];
  $ModeloDocentes->update($Id,$Nombre, $Apellido, $Usuario, $Clave, $Estado);
}else {
  header('Location: ../../index.php');
}

?>