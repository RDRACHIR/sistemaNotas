<?php
require_once('../Modelo/Usuarios.php');

if ($_POST) {
  $Usuario = $_POST['Usuario']; 
  $Contrasena = $_POST['Contrasena'];

  //Objeto de la clase Usuario
  $Modelo = new Usuario();
  if($Modelo->login($Usuario, $Contrasena)){
    header('Location: ../../Estudiantes/Pages/index.php');
  }else {
    header('Location: ../../index.php');
  }
}else {
  header('Location: ../../index.php');
}

?>