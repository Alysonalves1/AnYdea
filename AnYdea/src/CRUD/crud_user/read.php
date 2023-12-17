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
        header("location: ../../pages/index2.php");
        exit;
    } else {
        $_SESSION['mensagem'] = "Credenciais inválidas. Tente novamente.";
        header("location: ../../pages/login.php");
    }
}


// Verificar se o botão de logout foi acionado
if (isset($_POST['logout'])) {
    // Destruir todos os dados da sessão
    session_destroy();

    
    header("Location: ../../index.php");
    exit;
}