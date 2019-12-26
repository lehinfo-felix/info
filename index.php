<?php
    $status = "#2ecc71ff";
/*
            "Vai dar certo."
                    (Lobo, Leudo - 2019)
*/
    $paginaAtualC = "pagAtual";
    require("conexao.php");
    require("molde.php");

    $consulta = $pdo->query("SELECT * FROM `curriculos` WHERE 1");
    $num_curriculos = $consulta->rowCount();
    if (strlen($num_curriculos) == 1) {
        $num_curriculos = '0'.$consulta->rowCount();
    }else{
        $num_curriculos = $consulta->rowCount();
    }
?>
<div class="div_all">
    <h1>RELATÓRIO DE DADOS</h1>
    <div class="out_dados1">
        <div class="dados1">
            <h4><?php echo $num_curriculos ?></h4>
            <h5>Currículos<br>adicionados<br>ao sistema!</h5>
        </div>
    </div>

    <div class="out_dados2">
        <div class="dados2">
            <h4>03</h4>
            <h5>Usuários<br>atualmente<br>online!</h5>
        </div>
    </div>
    <div class="user_status">
        <img src="imagens/<?php echo $nameUser?>.png" alt="" srcset="">
        <div class="status_color" style="background-color: <?php echo $status ?> "></div>
    </div>
</div>
