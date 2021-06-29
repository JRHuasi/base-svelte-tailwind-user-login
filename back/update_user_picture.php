<?php
header('Content-Type: application/json');
require_once(__DIR__.'/protected/database.php');
$db = new Database();
$destinationFolder = $_SERVER['DOCUMENT_ROOT'].'/construcciones-escolares/assets/imagenes/';
$allowedExtensions = ['png','jpg','gif','jpeg'];

if (!isset($_FILES['picture'])) {
  $db->err(0, 'Image missing',__LINE__);
  exit();
}else{
  // var_dump($_FILES['picture']);
  $extension = pathinfo($_FILES['picture']['name'], PATHINFO_EXTENSION);
}
  
if(!in_array($extension,$allowedExtensions)){
  $db->err(0,'La imagen debe ser '.implode(',',$allowedExtensions), __LINE__);
  exit();
}if($_FILES['picture']['size'] < 10000){
  $db->err(0, 'la imagen es muy pequeña', __LINE__);
  exit();
}else if($_FILES['picture']['size'] > 1000000){
  $db->err(0, 'la imagen es muy grande', __LINE__);
  exit();
}else{
  // crear un nombre único para la imagen
  $uniquePictureName = bin2hex(random_bytes(16)); // 32 caracteres de largo
  $uniquePictureName .= '.'.$extension;
  $finalPath = $destinationFolder.$uniquePictureName;

  if(move_uploaded_file($_FILES['picture']['tmp_name'],$finalPath)){
    $query = 'UPDATE usuarios SET 
    picture_name = "'.$uniquePictureName.'"
    WHERE UsuarioId = "'.$_GET['id'].'"';
    $db->conn->query($query);
    if($db->conn->affected_rows!=1){
      $db->err(0,'Hubo un problema en el servidor', __LINE__);
    }else{
      $db->err(200, 'Usuario creado: '.$db->conn->insert_id, __LINE__);
    }
  }else{
    $db->err(0, 'Hubo un problema al cargar la imagen', __LINE__);
  }
}
