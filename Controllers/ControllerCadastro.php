


<?php 
require_once "../Includes/Variaveis.php"; 
require_once "../Connection/Crud.php";

$crud = new Crud();

if($acao == "Cadastrar")
{
$crud->insertDB("tb_dados_cliente", "?,?,?,?,?,?,?,?,?", array(null,$nome, $sobrenm, $idade, $sexo, $endereco, $bairro, $cidade, $estado));

//echo "nome $nome <br>, sobre nome $sobrenm <br>, idade $idade <br>, sexo $sexo <br>, endereço $endereco <br>, bairro $bairro <br>, cadide $cidade <br>, estado $estado";
echo "Cadastro realizado com sucesso!";
        


######### Atualizar cliente
}   elseif($acao=="Editar") {
echo " O código é $codigo ";
print_r(array($nome, $idade, $sexo, $codigo));
$crud->UpdateDB("tb_dados_cliente", "nome = ?, idade = ?, sexo= ?", "cd = ?", array($nome, $idade, $sexo, $codigo));   
        echo 'Edição realizaada com sucesso!</p>';
}
?>

<a style="text-decoration: none; font-family: sans-serif" href="../Index.php">Voltar</a>



