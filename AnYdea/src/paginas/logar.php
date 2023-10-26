<?php

if(isset($_POST['email']) && !empty($_POST['email']) && isset($_POST['senha']) && !empty($_POST['senha'])) {
    require "conexao.php";
    $email = addslashes($_POST['email']);
    $senha = addslashes($_POST['senha']);

}else{
    header("location: login.php");
}

?>