<?php

  class Database {
		public $conn;

    function __construct(){
      $dbUserName = 'root';
      $dbPassword = 'ariana';
      $dbName = 'constescolares';
      $this->conn = new mysqli("localhost",$dbUserName,$dbPassword,$dbName);
      $this->conn->query("SET NAMES 'utf8'");
   
    }

    function err($status=0, $message = 'error', $debug = 0){
      echo '{
        "status":'.$status.',
        "message": "'.$message.'",
        "debug": "'.$debug.'"
      }';
      exit();
    }

    /* 
    CREATE TABLE `usuarios` (
      `UsuarioId` bigint UNSIGNED NOT NULL,
      `Usuario` varchar(45) DEFAULT NULL,
      `Password` varchar(45) DEFAULT NULL,
      `picture_name` varchar(100) NOT NULL,
      `Estado` varchar(45) DEFAULT NULL
    ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
    */
  }