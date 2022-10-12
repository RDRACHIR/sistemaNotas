<?php
require_once('../Modelo/Administradores.php');

if ($_POST) {
  $ModeloAdministrador = new Administradores();

  $Id = $_POST['Id'];
  $ModeloAdministrador->delete($Id);
}else {
  header('Location: ../../index.php');
}
?>