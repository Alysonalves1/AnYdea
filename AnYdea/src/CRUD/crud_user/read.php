<?php
include '../connection.php';

session_start();

// Verifica se o formulário foi enviado
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];
    $senha = $_POST['senha'];

    $sql = "SELECT * FROM user WHERE email='$email' AND senha='$senha'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        header("location: ../../../../index.php");
        exit;
    } else {
        $_SESSION['mensagem'] = "Credenciais inválidas. Tente novamente.";
        header("location: ../pages/login.php");
    }

    if ($login_sucesso) {
        header("Location: ../../../index.php");
        exit();
    } else {
        $_SESSION['mensagem'] = "Login falhou. Verifique suas credenciais.";
        header("Location: ../../pages/login.php");
        exit();
    }
}
