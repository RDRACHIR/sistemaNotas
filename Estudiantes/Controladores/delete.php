<?php
require_once('../Modelo/Estudiantes.php');

if ($_POST) {
  $ModeloEstudiante = new Estudiantes();
  $Id = $_POST['Id'];
  $ModeloEstudiante->delete($Id);
}else {
  header('Location: ../../index.php');
}
?>