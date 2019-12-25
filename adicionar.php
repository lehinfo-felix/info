<?php
    $paginaAtualA = "pagAtual";
    require('conexao.php');
    require("molde.php");
    
/*
    Obtendo valores passados no input
*/

    if(isset($_POST['submit'])){
        $nome_completo = $_POST['nome_completo'];
        $email = $_POST['email'];
        $cpf = $_POST['cpf'];
        $formacao = $_POST['formacao'];
        $experiencia = $_POST['experiencia'];
        $idade = $_POST['idade'];
        $data_nascimento = $_POST['data_nascimento'];
        $observacoes = $_POST['observacoes'];
    
    /*
    ENVIO DE DADOS PARA O BANCO DE DADOS
    */
    

    if(empty($nome_completo) || empty($email) || empty(cpf) || empty($formacao) || empty($experiencia) || empty($idade) || empty($data_nascimento) || empty($observacoes)){
        $msgEnvia = 'Preencha todos os campos obrigatórios.*';
        echo $msgEnvia;
    }else{  
        $data = array ($nome_completo, $email, $cpf, $idade, $formacao, $experiencia, $data_nascimento, $observacoes);
        $upUser = $pdo->prepare("INSERT INTO curriculos(nome_completo, email, cpf, idade, formacao, experiencia, data_nascimento, observacoes) VALUES (?,?,?,?,?,?,?,?)");
        $upUser->execute($data);
        if($upUser->rowCount () > 0){
            $msgEnvia = 'Currículo adicionado com sucesso!';
        }else{
            $msgEnvia = 'Desculpe, houve um erro interno. O currículo não foi adicionado.';
        }
    }
    }
    ?>

    <div class="div_all">
        <h2>
            Dados pessoais
        </h2>
        <form method="post">
            <div id="nome_completo">
                    <label for="nome_completo">Nome completo</label>
                <input type="text" name="nome_completo" class="add_input">
            </div>
            <div id="email">
                    <label for="email">E-mail</label>
                <input type="email" name="email" class="add_input">
            </div>
            <div class="cpf_idade">
            <div id="cpf">
                    <label for="cpf">CPF</label>
                <input type="text" name="cpf" class="add_input">
            </div>
            <div id="idade">
                    <label for="idade">Idade</label>
                <input type="text" name="idade" class="add_input">
            </div>
            </div>
            <div id="formacao">
                    <label for="formacao">Formação acadêmica</label>
                <input type="text" name="formacao" class="add_input">
            </div>
            <div id="experiencia">
                    <label for="experiencia">Experiência profissional</label>
                <input type="text" name="experiencia" class="add_input">
            </div>
            <div class="right_form">
            <div id="data_nascimento">
                    <label for="data_nascimento">Data de nascimento</label>
                <input type="date" name="data_nascimento" class="add_input">
            </div>
            <div id="observacoes">
                    <label for="observacoes">Observações</label>
                <input type="text" name="observacoes" class="add_input">
            </div>
            <button type="submit" class="btn_form btn_envia" name="submit" value="submit" id="submit">Enviar</button>
            <a href="adicionar.php" class="btn_form btn_cancela">Cancelar</a>
            </div>
            </div>
        <span>
        </span>

        </form>