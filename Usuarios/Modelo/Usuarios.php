<?php
require_once('../../conexion.php');
session_start();

class Usuario extends Conexion{
  
  public function __construct(){
    //Llamado al constructor de la conexion para realizar la conexion
    $this-> db = parent::__construct();
  }

  //Metodo login para inicion de session 
  public function login($Usuario, $Contrasena){
    $statement = $this->db->prepare("SELECT * FROM usuarios WHERE USUARIO = :Usuario AND CLAVE = :Contrasena");
    $statement->bindParam(':Usuario', $Usuario);
    $statement->bindParam(':Contrasena', $Contrasena);
    $statement->execute();
    if ($statement->rowCount() == 1) {
      $result = $statement->fetch();
      $_SESSION['NOMBRE'] = $result["NOMBRE"] . " " . $result['APELLIDO'];
      $_SESSION['ID'] =  $result['ID_USUARIO'];
      $_SESSION['PERFIL'] = $result['PERFIL'];
      return true;
    }
    return false;
  }
//Metodo donde retorna la session
public function getNombre(){
  return $_SESSION['NOMBRE'];
}

public function getId(){
  return $_SESSION['ID'];
}

public function getPerfil(){
  return $_SESSION['PERFIL'];
}

public function validateSession(){
  if ($_SESSION['ID'] == null) {
    header('Location: ../../index.php');
  }
}

public function validateSessionAdministrador(){
  if ($_SESSION['ID'] != null) {
    if ($_SESSION['PERFIL'] == 'Docente') {
      header('Location: ../../Estudiantes/Pages/index.php');
    }
  }else {
    header('Location: ../../index.php');
  }
}

public function salir(){
  $_SESSION['ID'] = null;
  $_SESSION['NOMBRE'] = null;
  $_SESSION['PERFIL'] = null;
  session_destroy();
  header('Location: ../../index.php');
}

}
?>