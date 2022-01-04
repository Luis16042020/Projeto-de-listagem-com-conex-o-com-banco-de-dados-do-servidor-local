<?php require_once 'verificarAcesso.php'?>
<?php require_once 'cabecalho.php'?>
    <div class = "w3-padding w3-content w3-text-grey w3-third w3-display-middle" id="eProfissional">
        <?php 
        require_once 'conexaoBD.php';
        $sql = "DELETE FROM amigo WHERE id = '".$_POST['txtID']."';";
        if($conexao->query($sql) === TRUE){
            echo '<a href = "listar.php"> 
            <h1 class = "w3-button w3-teal">Amigo Excluído com Sucesso!</h1>
            </a>
            ';
        }else{
            echo '<a href = "listar.php">
            <h1 class = "w3-buton w3-teal">ERRO!</h1> 
            </a>
            ';
        }
        $conexao->close();
        ?>
<?php require_once 'rodape.php'?>