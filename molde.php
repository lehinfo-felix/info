<title>AC Currículos - Dashboard</title>
</head>
<body>
    <div class="topBar"><a href="logout.php"><img src="icons/logout.png" alt="" srcset=""></a></div>
    <div class="box">
    </div>
    <div class="leftBar">
        <img src="imagens/user.png" alt="" srcset="">
        <p class="userName">
            <?php
                require("header.php");
                $nameUser = $_SESSION['usuario']['name'];
                echo $nameUser;
            ?>
        </p>
        <ul>
            <li class="<?= $paginaAtualA;?>" ><a href="adicionar.php">Adicionar</a></li>
            <li class="<?= $paginaAtualR;?>" ><a href="remover.php">Remover</a></li>
            <li class="<?= $paginaAtualC;?>" ><a href="index.php">Consultar</a></li>
        </ul>
        <img src="imagens/logo.png" alt="" srcset="" style="margin-top:50px">
    </div>
        <div class="divMsg">
        <div class="alert fade msgDiv"  style="display:inline-flex">
        <?php   

            date_default_timezone_set("America/Fortaleza");
            $hora = date("H:i:s")."<br>";

            if($hora > '05:59:59' && $hora < '12:00:00')
            {
                $periodo = 'Bom dia';
            }elseif($hora > '11:59:59' && $hora < '18:00:00')
            {
                $periodo = 'Boa tarde';
            }
            elseif($hora > '17:59:59' && $hora < '23:59:59' || $hora > '00:00:00' && $hora < '06:00:00')
            {
                $periodo = 'Boa noite';
            }

        ?>
        <p><?php echo $periodo ?>, seja bem-vindo(a) <b><?php echo $nameUser?>!</b></p>

        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>

    </div>
        </div>
    <?php require('scripts.php'); ?>

</body>
</html>