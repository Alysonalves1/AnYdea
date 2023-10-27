<?php
include 'conexao.php';

if (isset($_POST['update_user'])) {
    $user_id = $_POST['user_id'];
    $new_email = $_POST['new_email'];

    $sql = "UPDATE users SET email = '$new_email' WHERE id = $user_id";
    $conn->query($sql);
}