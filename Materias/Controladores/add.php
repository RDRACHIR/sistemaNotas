<?php
require_once('../Modelo/Materias.php');

if ($_POST) {
  $ModeloMateria = new Materias();

  $Materia = $_POST['Materia'];
  $ModeloMateria->add($Materia);
}else {
  header('Locaton: ../../index.php');
}

?>