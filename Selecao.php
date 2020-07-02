<?php 
require_once "./Includes/Header.php";
require_once "./Connection/Crud.php";
?>
<div>
    <table class="tabalaCrud">
        <tr>
            <td>Código</td>
            <td>Nome</td>
            <td>Sobre nome</td>
            <td>Idade</td>
            <td>Sexo</td>
            <td>Endereço</td>
            <td>Bairro</td>
            <td>Cidade</td>
            <td>Estado</td>
            <td>Ações</td>
        </tr>



<?php 
    $crud = new Crud();
    $BFetch = $crud->selectBD("*", "tb_dados_cliente", "", array());

    while($fetch = $BFetch->fetch(PDO::FETCH_ASSOC)) {
?>

        <tr>
        <td><?php echo $fetch['cd']; ?></td>
            <td><?php echo $fetch['nome']; ?></td>
            <td><?php echo $fetch['sobrenome']; ?></td>
            <td><?php echo $fetch['idade']; ?></td>
            <td><?php echo $fetch['sexo']; ?></td>
            <td><?php echo $fetch['endereco']; ?></td>
            <td><?php echo $fetch['bairro']; ?></td>
            <td><?php echo $fetch['cidade']; ?></td>
            <td><?php echo $fetch['estado']; ?></td>
            <td>
                <a href="<?php echo "Visualizar.php?cd={$fetch['cd']}" ?>">Selecionar</a>
                <a href="<?php echo "Cadastro.php?cd={$fetch['cd']}" ?>">Editar</a>
                <a href="<?php echo "Controllers/ControllerDeletar.php?cd={$fetch['cd']}" ?>">Deletar</a>
            </td>
        </tr>

        <?php
            }
        ?>

    </table>
</div>

<?php require_once "./Includes/Footer.php" ?>