
<?php
include '../connection.php';
session_start();

// if (isset($_SESSION['email'])) {
$email = $_SESSION['email'];

// Obtém o ID do usuário com base no email
$query_user_id = "SELECT PersonID FROM user WHERE EMAIL = '$email'";
$result_user_id = $conn->query($query_user_id);

if ($result_user_id->num_rows > 0) {
    $row = $result_user_id->fetch_assoc();
    $PersonID = $row['PersonID'];

    // Obtém os posts do usuário com base no PersonID
    $query_posts = "SELECT * FROM posts WHERE PersonID = '$PersonID'";
    $result_posts = $conn->query($query_posts);

    if ($result_posts->num_rows > 0) {
        // Exibe os posts
        while ($post = $result_posts->fetch_assoc()) {
            echo "Título: " . $post['titulo'] . "<br> ";
            echo "Conteúdo: " . $post['conteudo'] . "<br><br>";
            // Você pode exibir outros detalhes do post conforme necessário
        }
    } else {
        echo "Voçe não possui postagens";
    }
} else {
    echo "Usuário não encontrado.";
}
// } 

?>

