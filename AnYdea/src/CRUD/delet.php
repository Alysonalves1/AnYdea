<?php
include 'connection.php';

if (isset($_GET['delete_user'])) {
    $user_id = $_GET['delete_user'];
    $sql = "DELETE FROM user WHERE id = $user_id";
    $conn->query($sql);
}

$conn->close();