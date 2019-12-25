<?php
    $paginaAtualR = "pagAtual";
    require("molde.php");
    $id = 16;

    $consulta_ids = $pdo->query("SELECT id FROM curriculos");
    $ids = $consulta_ids->fetchAll();

            foreach ($ids as $key => $value) {

                $idz = $pdo->query("SELECT * FROM curriculos WHERE id = ".$ids[$key][0]);
                $idz->execute();
                $resultado_idz = $idz->fetchObject();
                $curriculo_idz = $resultado_idz->id;

                $curriculo_nome = $resultado_idz->nome_completo;
                $curriculo_id = $resultado_idz->id;
                $curriculo_email = $resultado_idz->email;
                $curriculo_cpf = $resultado_idz->cpf;
                require('curriculo.php');

            }

        $consulta = $pdo->query("SELECT * FROM curriculos");
        $numero_de_curriculos = $consulta->rowCount();
    ?>
        <div class="div_all">
            <div class="curriculos">
                <?php
                for ($i=1; $i <= $numero_de_curriculos; $i++) {}
                ?>
            </div>
        </div>
