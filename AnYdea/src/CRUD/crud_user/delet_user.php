<?php
include '../connection.php';

if (isset($_GET['delete_user'])) {
    $user_id = $_GET['delete_user'];

    if (ctype_digit($user_id)) {
        $user_id = intval($user_id);

        $sql = "DELETE FROM user WHERE id = $user_id";

        if ($conn->query($sql)) {
            echo "Usuário excluído com sucesso.";
        } else {
            echo "Erro ao excluir usuário: " . $conn->error;
        }
    } else {
        echo "ID de usuário inválido.";
    }
}

$conn->close();
?>