<?php
header('Content-Type: application/json');
require_once(__DIR__.'/protected/database.php');
$db = new Database();

if (!isset($_POST['nombre'])) {
  $db->err(0, 'Debe indicar el nombre',__LINE__);
  // falta chequear que el nombre de usuario sea único
  exit();
}else{
  $query = 'UPDATE usuarios SET 
  UserUsuario = "'.$_POST['nombre'].'"
  WHERE UserID = "'.$_GET['id'].'"';
  $db->conn->query($query);
  $affected = $db->conn->affected_rows;
  if($affected==-1){
    $db->err(0,'Hubo un problema en el servidor', __LINE__);
  }else if($affected==0){
    $db->err(200, 'No hubo cambios', __LINE__);
  }else{
    $db->err(200, 'Usuario modificado', __LINE__);
  }
}
