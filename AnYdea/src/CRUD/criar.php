<?php
include 'conexao.php';

if (isset($_POST['create_user'])) {
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $senha = $_POST['senha'];

    $sql = "INSERT INTO users (name, email, password) VALUES ('$nome','$email', '$senha')";
    $conn->query($sql);
}



/*indicação de correçao para segurança dos dados e verificação
if (isset($_POST['create_user'])) {
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $senha = $_POST['senha'];

    
    $conn = new mysqli("localhost", "root", "", "anydea");

    if ($conn->connect_error) {
        die("Conexão falhou: " . $conn->connect_error);
    }

    // Use uma declaração preparada para inserir os dados
    $sql = "INSERT INTO users (name, email, password) VALUES (?, ?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("sss", $name, $email, $hashedPassword); // 's' indica strings

    //hash da senha
    $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

    // Execute a declaração preparada
    if ($stmt->execute()) {
        echo "Usuário criado com sucesso!";
    } else {
        echo "Erro ao criar o usuário: " . $stmt->error;
    }

    // Feche a declaração e a conexão
    $stmt->close();
    $conn->close();
}
*/