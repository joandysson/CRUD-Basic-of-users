<?php
    require_once "../Connection/Crud.php";
    $crud = new crud();

    $idUser=filter_input(INPUT_GET,'cd', FILTER_SANITIZE_SPECIAL_CHARS);
    $dell = $crud->deleteDB("tb_dados_cliente", "cd = ?", array($idUser));
    echo "Dado deletato com sucesso!";
?>

<a href="../Selecao.php">Voltar</a>