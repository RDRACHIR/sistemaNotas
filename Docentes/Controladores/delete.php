<?php
require_once('../Modelo/Docentes.php');
if ($_POST) {
  $ModeloDocente = new Docentes();
  $Id = $_POST['Id'];
  $ModeloDocente->delete($Id);
}else {
  header('../../index.php');
}
?>