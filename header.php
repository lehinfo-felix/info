<?php

session_start();
require('conexao.php');

    if(!isset($_SESSION['usuario'])){
      header("Location: login.php");
    }else{

  $idUser = $_SESSION['usuario']['id'];
  $getUser = $pdo->query("SELECT * FROM user WHERE id_user = '$idUser' LIMIT 1");

  if ($getUser->rowCount() > 0) {

    $usuario = $getUser->fetchObject();
    $idUser = $usuario->id_user;
  }else {

    header("Location: login.php");
  }
}

require('conexao.php');
    if(!isset($_SESSION['usuario'])){
        header("Location: login.php");
    }

?>
<!DOCTYPE html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="shortcut icon" href="imagens/logo.png" type="image/x-icon">
    <link rel="stylesheet" href="<?=$urlBase?>css/molde.css">
    <link rel="stylesheet" href="<?=$urlBase?>css/global.css">
    <link rel="stylesheet" href="<?=$urlBase?>css/adicionar.css">
    <!--<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">-->