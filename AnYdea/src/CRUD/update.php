<?php
include 'connection.php';

if (isset($_POST['update_user'])) {
    $user_id = $_POST['PersonID'];
    $new_email = $_POST['new_email'];

    $sql = "UPDATE user SET email = '$new_email' WHERE id = $user_id";
    $conn->query($sql);
}