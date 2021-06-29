<?php
header('Content-Type: application/json');
require_once(__DIR__.'/protected/database.php');

$db = new Database();

$query = "SELECT * FROM usuarios WHERE 1";
$res = $db->conn->query($query);
$lista = [];
while ($reg = $res->fetch_assoc()) {
  $lista[] = $reg;
}
$res->close();
echo json_encode($lista);