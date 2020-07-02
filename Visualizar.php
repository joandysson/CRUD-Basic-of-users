<?php require_once "./Includes/Header.php"; ?>
<?php require_once "./Connection/Crud.php"; ?>


<div>
    <?php
        $crud = new Crud();
        $idUser = filter_input(INPUT_GET,'cd', FILTER_SANITIZE_SPECIAL_CHARS);
        $Bfetch = $crud->selectBD("*","tb_dados_cliente", "where cd =?", array($idUser));

        $Fetch = $Bfetch->fetch(PDO::FETCH_ASSOC);
    ?> 
    <h1>Dados do usuario</h1>
    <hr>
    <strong>Código: </strong> <?php echo $Fetch['cd']; ?><br>
    <strong>Nome: </strong> <?php echo $Fetch['nome'];  ?><br>
    <strong>Sobre nome: </strong> <?php echo $Fetch['sobrenome'];  ?><br>
    <strong>Idade: </strong> <?php echo $Fetch['idade']; ?><br>
    <strong>Sexo: </strong> <?php echo $Fetch['sexo']; ?><br>
    <strong>Endereço: </strong> <?php echo $Fetch['endereco']; ?> <br>
    <strong>Bairro: </strong> <?php echo $Fetch['bairro']; ?> <br>
    <strong>Cidade: </strong> <?php echo $Fetch['cidade']; ?> <br>
    <strong>Estado: </strong> <?php echo $Fetch['estado']; ?> <br>


</div>

<?php require_once "./Includes/Footer.php"; ?>
