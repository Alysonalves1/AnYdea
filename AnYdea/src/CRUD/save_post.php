<?php
include 'connection.php';
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_SESSION['email'])) {
    // Obtém o email do usuário logado
    $email = $_SESSION['email'];

    // Obtém o PersonID do usuário com base no email
    $query_user_id = "SELECT PersonID FROM user WHERE EMAIL = '$email'";
    $result_user_id = $conn->query($query_user_id);

    if ($result_user_id->num_rows > 0) {
        $row = $result_user_id->fetch_assoc();
        $PersonID = $row['PersonID'];

        // Obtém os dados do formulário
        $titulo = $_POST['titulo'];
        $conteudo = $_POST['conteudo'];

        // Insere um novo post associado ao PersonID do usuário
        $query_insert_post = "INSERT INTO posts (PersonID, titulo, conteudo) VALUES ('$PersonID', '$titulo', '$conteudo')";
        
        if ($conn->query($query_insert_post) === TRUE) {
            header("Location: ../pages/index2.php");
            // exit();
        } else {
            echo "Erro ao inserir o post: " . $conn->error;
        }
    } 
} else {
    echo "Erro: método de requisição inválido ou usuário não logado.";
}
?>
