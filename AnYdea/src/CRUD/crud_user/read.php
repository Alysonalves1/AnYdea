<?php
include '../connection.php';

session_start();

// Verifica se o formulário foi enviado
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = addslashes($_POST['email']);
    $senha = addslashes($_POST['senha']);

    $sql = "SELECT * FROM user WHERE email='$email' AND senha='$senha'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        header("location: ../../pages/index2.php");
        $_SESSION['email'] = $email;
        exit;
    } else {
        $_SESSION['mensagem'] = "Credenciais inválidas. Tente novamente.";
        header("location: ../../pages/login.php");
    }
}