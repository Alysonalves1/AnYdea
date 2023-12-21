<?php
include '../connection.php';


    $user_id = $_POST['personID'];

        $sql = "DELETE FROM user WHERE PersonID = $user_id";

        if ($conn->query($sql)) {
            echo "Usuário excluído com sucesso.";
        } else {
            echo "Erro ao excluir usuário: " . $conn->error;
        }
   




$conn->close();
?>