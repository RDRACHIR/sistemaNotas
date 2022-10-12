<?php 
require_once('../../conexion.php');

class Administradores extends Conexion{

  public function __construct(){
    $this->db = parent::__construct();
  }

  public function add($Nombre, $Apellido, $Usuario, $Clave){
    $statement = $this->db->prepare("INSERT INTO usuarios (NOMBRE, APELLIDO, USUARIO, CLAVE, PERFIL, ESTADO) VALUES (:Nombre, :Apellido, :Usuario, :Clave, 'Administrador', 'Activo')");
    //Asignacion de valores
    $statement->bindParam(':Nombre', $Nombre);
    $statement->bindParam(':Apellido', $Apellido);
    $statement->bindParam(':Usuario', $Usuario);
    $statement->bindParam(':Clave', $Clave);
    if ($statement->execute()) {
      header('Location: ../Pages/index.php');
    }else {
      header('Location: ../Pages/add.php');
    }
  }

  public function get(){
    $rows = null;
    $statement = $this->db->prepare("SELECT * FROM usuarios WHERE PERFIL = 'Administrador' ");
    $statement->execute();
    while ($result = $statement->fetch()) {
      $rows[] = $result;
    }
    return $rows;
  }

  public function getById($Id){
    $rows = null;
    $statement = $this->db->prepare("SELECT * FROM usuarios WHERE PERFIL = 'Administrador' AND ID_USUARIO = :Id");
    $statement->bindParam(':Id', $Id);
    $statement->execute();
    while ($result = $statement->fetch()) {
      $rows[] = $result;
    }
    return $rows;
  }

  public function update($Id, $Nombre, $Apellido, $Usuario, $Contrasena, $Estado){
    $statement = $this->db->prepare("UPDATE usuarios SET NOMBRE = :Nombre, APELLIDO = :Apellido, USUARIO = :Usuario, CLAVE = :Contrasena, ESTADO = :Estado WHERE ID_USUARIO = :Id");
    $statement->bindParam(':Id', $Id);
    $statement->bindParam(':Nombre', $Nombre);
    $statement->bindParam(':Apellido', $Apellido);
    $statement->bindParam(':Usuario', $Usuario);
    $statement->bindParam(':Contrasena', $Contrasena);
    $statement->bindParam(':Estado', $Estado);
      if ($statement->execute()) {
      header('Location: ../Pages/index.php');
    }else {
      header('Location: ../Pages/edit.php');
    }
  }

  public function delete($Id){
    $statement = $this->db->prepare("DELETE FROM usuarios WHERE ID_USUARIO = :Id");
    $statement->bindParam(':Id', $Id);
    if ($statement->execute()) {
      header('Location: ../Pages/index.php');
    }else {
      header('Location: ../Pages/delete.php');
    }
  }

}
?>
