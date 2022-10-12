<?php
require_once('../Modelo/Docentes.php');

if ($_POST) {
  $ModeloDocente = new Docentes();

  $Nombre = $_POST['Nombre'];
  $Apellido = $_POST['Apellido'];
  $Usuario = $_POST['Usuario'];
  $Clave = $_POST['Clave'];
  $ModeloDocente->add($Nombre, $Apellido, $Usuario, $Clave);
}else {
  header('Location: ../../index.php');
}
?>