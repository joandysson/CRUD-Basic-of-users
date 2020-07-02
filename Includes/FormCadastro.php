<?php 
    require_once "{$_SERVER['DOCUMENT_ROOT']}/MyProject/TesteCrudFinal/Connection/Crud.php";
    if(isset($_GET['cd'])){
        $acao = "Editar";
        $crud = new Crud();

        $BFetch = $crud->selectBD('*', 'tb_cliente', 'where cd = ?', array($_GET['cd']));
        $fetch = $BFetch->fetch(PDO::FETCH_ASSOC);
        $codigo=$fetch['cd'];
        $nome=$fetch['nome'];
        $sobrenm = ['sobrenome'];
        $idade=$fetch['idade'];
        $sexo=$fetch['sexo'];
        $endereco = ['endereco'];
        $bairro = ['bairro'];
        $cidade = ['cidade'];
        $estado = ['estado'];

    } else {
        #Variaves do cadastro para o uso do metodo de edição
        $acao = "Cadastrar";
        $codigo = "";
        $nome = "";
        $sobrenm = "";
        $idade = "";
        $sexo = "Selecionar sexo";
        $endereco = "";
        $bairro = "";
        $cidade = "";
        $estado = "";

        
        #Variaves adicionais

        $OcultaLabel = "";
        $instrucao = "";
    }
?>


<!-- Formulario de cadastro e edição de usuario-->

<form class="forme" name="formCadastro" id="formCadastro" method="POST" action="Controllers/ControllerCadastro.php">
    <input type="hidden" id="acao" name="acao" value="<?php echo $acao; ?>"> 

    <?php $acao=="Editar"?$instrucao = "text" : $instrucao = "hidden"; ?>
    <?php $acao=="Editar"?$OcultaLabel = "" : $OcultaLabel = "hidden"; ?>    
    <label <?php echo $OcultaLabel ?> for="cd">Código</label>
    <input type="<?php echo $instrucao; ?>" name="codigo" id="cd" value="<?php echo $codigo; ?>" readonly>

    <label for="mn">Nome:</label>    
    <input type="text" name="nome" id="nm" value="<?php echo $nome; ?>">
    
    <label for="sbmn">Sobre nome:</label>
    <input type="text" name="sobrenome" id="sbnm" value="<?php echo $sobrenm; ?>">

    <label for="idd">Idade:</label>
    <input type="number" name="idade" id="idd" value="<?php echo $idade; ?>">
    
    <label for="sx"></label>
    <select id="sx" name="sexo">
        <option value="<?php echo $sexo; ?>"><?php echo $sexo;?></option>
        <option value="Masculino">Masculino</option>
        <option value="Feminino">Feminino</option>
    </select>

    <label for="endere">Endereço</label>
    <input type="text" id="endere" name="end" placeholder="Rua, avenida, estada etc" value="<?php echo $endereco; ?>">
    
    <label for="numerocs">Número</label>
    <input type="number" id="numerocs" name="nmcs" placeholder="N°" <?php echo ''; ?>>

    <label for="br">Bairro</label>
    <input type="text" id="br" name="bairro" value="<?php echo $bairro; ?>">
    
    <label for="cdd">Cidade</label>
    <input type="text" id="cdd" name="cidade" value="<?php echo $cidade; ?>">

    <label for="std">Estado</label>
    <input type="text" id="std" name="estado" value="<?php echo $estado; ?>">

    <input type="submit" value="<?php echo $acao; ?>">
</form>