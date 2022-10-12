<?php
require_once('../Modelo/Materias.php');

if ($_POST) {
  $ModeloMateria = new Materias();
  $Id = $_POST['Id'];
  $ModeloMateria->delete($Id);
}else {
  header('Location: ../../index.php');
}
?>