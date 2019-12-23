<?php
    $paginaAtualA = "pagAtual";
    require("molde.php");
?>
    <div class="div_all">
        <h2>Dados Pessoais</h2>
        <form action="">
            <div id="nome_completo">
                    <label for="nome_completo">Nome completo</label>
                <input type="text" name="nome_completo" class="add_input">
            </div>
            <div id="email">
                    <label for="email">Email</label>
                <input type="email" name="email" class="add_input">
            </div>
            <div id="cpf">
                    <label for="cpf">CPF</label>
                <input type="text" name="cpf" class="add_input">
            </div>
            <div id="idade">
                    <label for="idade">Idade</label>
                <input type="text" name="idade" class="add_input">
            </div>
            <div id="formacao">
                    <label for="formacao">Formação acadêmica</label>
                <input type="text" name="formacao" class="add_input">
            </div>
            <div id="experiencia">
                    <label for="experiencia">Experiência profissional</label>
                <input type="text" name="experiencia" class="add_input">
            </div>
            <div id="data_nascimento">
                    <label for="data_nascimento">Data de nascimento</label>
                <input type="date" name="data_nascimento" class="add_input">
            </div>
            <div id="observacoes">
                    <label for="observacoes">Observações</label>
                <input type="text" name="observacoes" class="add_input">
            </div>
            <a href="" class="form_add/button">Enviar</a>
            <a href="adicionar.php" class="form_add/button">Cancelar</a>
    </div>
        </form>
