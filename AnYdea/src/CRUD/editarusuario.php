<?php
include 'conexao.php';

if (isset($_GET['user_id'])) {
    $user_id = $_GET['user_id'];

    $sql = "SELECT * FROM users WHERE id = $user_id";
    $result = $conn->query($sql);

    if ($result->num_rows == 1) {
        $user = $result->fetch_assoc();
    } else {
        echo "Usuário não encontrado.";
        exit;
    }
}

if (isset($_POST['update_user'])) {
    $new_email = $_POST['new_email'];
    $user_id = $_POST['user_id'];

    $sql = "UPDATE users SET email = '$new_email' WHERE id = $user_id";
    $conn->query($sql);

    header("Location: criar.php");
    exit;
}