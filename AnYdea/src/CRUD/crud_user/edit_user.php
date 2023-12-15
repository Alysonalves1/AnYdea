<?php
include '../connection.php';

if (isset($_GET['PersonID'])) {
    $user_id = $_GET['PersonID'];

    $sql = "SELECT * FROM user WHERE id = $user_id";
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

    $sql = "UPDATE user SET email = '$new_email' WHERE id = $user_id";
    $conn->query($sql);

    header("Location: criar.php");
    exit;
}
?>