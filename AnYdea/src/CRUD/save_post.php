<?php 

// Conexãp com o banco de dados
include 'connection.php';

// obter os valores do titulo e do conteudo enviados pelo formulario
$titulo = $_POST['titulo'];
$conteudo = $_POST['conteudo'];

$stmt = $conn->prepare("INSERT INTO posts (titulo, conteudo) VALUE (?, ?)");
$stmt->bind_param("ss", $titulo, $conteudo);

if ($stmt->execute()){
    header("location: ../../index.php");
} else {
    echo "Erro ao salvar a postagem: " . $stmt->error;
}

//Fechando a declaração e a conexão com o banco de dados
$stmt-> close();
?>