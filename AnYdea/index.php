<?php
session_start();

if (!isset($_SESSION['PersonID'])) {
    header("Location: ./src/pages/register.php");
    exit();
}
?>


<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AnYdea</title>

    <link rel="stylesheet" href="./src/css/index.css">
    <!-- <link rel="stylesheet" href="./src/css/post.css"> -->
</head>

<body>

    <header>
        <nav>
            <ul>
                <!-- <li><img class="oi" src="./src/imagens/transferir2.png" alt="" width="30" height="35"></li> -->
                <li><a href="./src/pages/about.php">Sobre</a></li>
            </ul>
        </nav>
        <a class="btn" href="./src/pages/login.php">Login</a>
        <a class="btn2" href="./src/pages/register.php">Cadastrar</a>
    </header>
    
    <ul>
        <div class="text-post">
            <h2>Faça um post agora!!</h2>
            <div class="container">
                <a href="./src/pages/post.php">criar nova postagem</a><br>
            </div>
        </div>
    </ul>
    
    <div class="postagens">

        <?php
            include "src/CRUD/connection.php";
    
            $sql = "SELECT * FROM posts ORDER BY ID DESC";
            $resultado = $conn->query($sql);
    
            if ($resultado->num_rows > 0) {
                while ($row = $resultado->fetch_assoc()) {
                    $id_postagem = $row['ID'];
                    $titulo = $row['titulo'];
                    $conteudo = $row['conteudo'];
                    
                    echo "<h2>$titulo</h2>";
                    echo "<p>$conteudo</p>";
                    echo "<form action='./src/pages/comentar.php' method='post'>";
                    echo "<input type='hidden' name='id_postagem' value='$id_postagem'>";
                    echo "<button type='submit'>Comentar</button>";
                    echo "</form>";
                    echo "<hr>";
                }
            }
    
            $conn->close();
        ?>

    </div>

</body>

</html>