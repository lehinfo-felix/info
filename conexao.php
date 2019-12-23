<?php 
  try {
    $pdo = new PDO("mysql:host=localhost;dbname=ac","root","");
    /* Adiciona as mensagens de erros */
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  } catch(PDOException $e) {
    
    echo 'ERROR: ' . $e->getMessage();
  }

  $urlBase ="http://localhost/InfoWebII/";
?>