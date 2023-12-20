<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AnYdea</title>

    <link rel="stylesheet" href="./src/css/index.css">



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


    <div class="postagens">

        <?php
        include "src/CRUD/connection.php";

        $sql = "SELECT posts.titulo, posts.conteudo, user.nome 
    FROM posts 
    INNER JOIN user ON posts.PersonID = user.PersonID 
    ORDER BY posts.PostID DESC";
        
        $resultado = $conn->query($sql);

        if ($resultado->num_rows > 0) {
            while ($row = $resultado->fetch_assoc()) {
                $criador = $row['nome'];

                $titulo = $row['titulo'];
                $conteudo = $row['conteudo'];

                echo "<h2>Publicado por: $criador</h2>";
                echo "<h2>Titulo: <br>$titulo<h2>";
                echo "<p>Conteúdo: <br>$conteudo<p>";
            }
        }


        $conn->close();
        ?>

    </div>

</body>

</html>