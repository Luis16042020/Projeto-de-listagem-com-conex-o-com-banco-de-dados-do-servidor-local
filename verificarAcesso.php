<?php
//este arquivo sempre vai verificar se há uma sessão aberta e se a variável logado está iniciada.
if(!isset($_SESSION))
{
    session_start();
}
if((!isset($_SESSION['logado']) == true))
{
    header('location: acessoNegado.php');
    die();
}
?>