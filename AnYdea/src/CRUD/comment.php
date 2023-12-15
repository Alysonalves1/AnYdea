<?php

include 'connection.php';

$id_postagem = $_POST['id_postagem']; // O ID da postagem à qual o comentário está relacionado
$nome_usuario = $_POST['nome_usuario'];
$comentario = $_POST['comentario'];

$stmt = $conn->prepare("INSERT INTO comentarios (id_postagem, nome_usuario, comentario) VALUES (?, ?, ?)");
$stmt->bind_param("iss", $id_postagem, $nome_usuario, $comentario);


if ($stmt->execute()) {
    // Redirecionar de volta para a página da postagem
    header("location: ../../save_post.php?id=" . $id_postagem);
} else {
    // Exibir mensagem de erro em caso de falha na execução da instrução SQL
    echo "Erro ao adicionar comentário: " . $stmt->error;
}

$stmt->close();
$conn->close();
?>