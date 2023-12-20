<?php
session_start();

include '../connection.php';

if (isset($_POST['create_user'])) {
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $senha = $_POST['senha'];
    
    // Verificar se o email já existe
    $checkEmailQuery = "SELECT * FROM user WHERE email = '$email'";
    $result = $conn->query($checkEmailQuery);

    if ($result->num_rows > 0) {
        $_SESSION['mensagem'] = "Email já cadastrado. Por favor, escolha outro.";
        header("location: ../../pages/register.php");
        
    } else {
        $insertQuery = "INSERT INTO user (nome, email, senha) VALUES ('$nome', '$email', '$senha')";
        if ($conn->query($insertQuery) === TRUE) {
            echo "Cadastro realizado com sucesso!";
            header("Location: ../../pages/login.php");
        } else {
            echo "Erro ao cadastrar: " . $conn->error;
        }
    }
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