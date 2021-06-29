<?php
header('Access-Control-Allow-Origin: *');
header('Content-Type: application/json');
require_once(__DIR__.'/protected/database.php');
$db = new Database();

if (!isset($_POST['nombre'])) {
  $db->err(0, 'Debe indicar el nombre',__LINE__);
  // falta chequear que el nombre de usuario sea único
  exit();
}else if (!isset($_POST['clave'])) {
  $db->err(0, 'Debe indicar la contraseña',__LINE__);
  // falta chequear el formato de la clave
  exit();
}else{
  $clave = md5($_POST['clave']);
  $nombre = strtoupper($_POST['nombre']);
  $query = 'SELECT * FROM usuarios WHERE 
    UPPER(UserUsuario) = "'.$nombre.'" AND
    UserClave = "'.$clave.'"';
  // echo $query;
  $res = $db->conn->query($query);
  $salida = false;
  if ($reg = $res->fetch_assoc()) {
    $salida = $reg;
  }
  $res->close();
  echo json_encode($salida);
}
