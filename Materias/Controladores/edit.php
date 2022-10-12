<?php
require_once('../Modelo/Materias.php');

if ($_POST) {
  $ModeloMateria = new Materias();

  $Id = $_POST['Id'];
  $Materia = $_POST['Materia'];
  $ModeloMateria->update($Id, $Materia);
}else {
  header('Location: ../../index.php');
}
?>