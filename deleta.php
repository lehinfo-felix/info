<?php
    require('conexao.php');
    $id = $_GET['id'];
    $deleta = $pdo->query("DELETE FROM curriculos WHERE id = $id");
    header("Location: remover.php");
?>