<?php

session_start();

require('conexao.php');

if(isset($_POST['entrar'])){
  
  $email = $_POST['email'];
  $password = $_POST['password'];


  if (empty($email)) {
    $erro = "É preciso informar o e-mail.";

  } elseif(empty($password)) {
    $erro = "É preciso informar a senha.";

  } else {
    /* Busca no BD se existe esse e-mail e senha */
    $getUser = $pdo->query("SELECT * FROM user WHERE email = '$email' LIMIT 1");

    if ($getUser->rowCount() > 0) {
      /* Se tiver algum resultado pega os dados */
      $usuario = $getUser->fetchObject();

      /* Pega o hash do Banco de Dados */
      $hash = $usuario->password;

      /* Verifica se a senha está correta */
      if(password_verify($password, $hash)) {
        /* Armazena os dados do usuário no Array da $_SESSION */
        $_SESSION['usuario'] = array(
        "id" => $usuario->id_user,
        "email" => $usuario->email,
        "name" => $usuario->name,
        "created_at" => $usuario->created_at
        );

        /* Direciona para a página inicial */
        header("Location: index.php");
    } else {
        $erro = password_hash($senha,PASSWORD_DEFAULT);
      }
      
    } else {

        $erro = "Não foi possivel realizar o login!";

    }
  }
 }

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>AC Currículos | Agenciando o seu futuro!</title>
  <link rel="shortcut icon" href="imagens/logo.png" type="image/x-icon">
  <link rel="stylesheet" href="css/global.css">
  <link rel="stylesheet" href="css/login.css">
</head>
<body>
  
  <div class="wrapper">
  <div class="box">
      <img src="imagens/logo.png" alt="" srcset="">
  </div>
    <form action="" method="POST" autocomplete="off">
      <div class="eml">
      <input type="email" name="email" placeholder="Nome" autocomplete="false">
        <img src="icons/user.svg" alt="" srcset="">
      </div>
      <div class="psw">
      <input type="password" name="password" placeholder="Senha" autocomplete="false">
        <img src="icons/psw.svg" alt="" srcset="">
      </div>

      
      <button type="submit" name="entrar">Login</button>

      <div class="erro">
      <?php 
        if(isset($erro)) 
          echo $erro; 
      ?>
    </div>
    </form>
  </div>
</body>
</html>