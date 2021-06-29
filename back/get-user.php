<?php
// Video 1
header('Content-Type: application/json');
require_once(__DIR__.'/protected/database.php');
$db = new Database();
if (!isset($_GET['id'])) $db->err(0,'id missing',__LINE__);
if(!ctype_digit($_GET['id'])) $db->err(0,'id not valid',__LINE__);

// echo '{"status": 1, "data": {"id": 1, "name": "Joan"}}';


$query = "SELECT * FROM usuarios WHERE UserID = ".$_GET['id'];
$res = $db->conn->query($query);
$salida = false;
if ($reg = $res->fetch_assoc()) {
  $salida = $reg;
}else{
  $db->err(0,'user not found',__LINE__);
}
$res->close();
echo json_encode($salida);
