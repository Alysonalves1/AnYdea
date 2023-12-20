<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AnYdea</title>

    <link rel="stylesheet" href="../css/index.css">
    


</head>

<body>

    <header>
        <nav>
            <ul>
                <!-- <li><img class="oi" src="./src/imagens/transferir2.png" alt="" width="30" height="35"></li> -->
                <li><a href="./about2.php">Sobre</a></li>

            </ul>
        </nav>
        <a class="btn" href="./profile.php">Perfil</a>
    </header>
    
    <ul>
    <div class="text-post">
        <h2>Faça um post agora!!</h2>
        <div class="container">
            <a href="../pages/post.php">criar nova postagem</a><br>
        </div>
    </div>
    </ul>
    

    <div class="postagens">

    <?php
    include "../CRUD/connection.php";
    
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
<<<<<<< HEAD
            echo "<h2>Publicado por: $criador</h2>";
            echo "<h3>$titulo<h3>";
            echo "<p>$conteudo<p>";
=======
           
            
            echo "<div class='title'>";
            echo " <h2> Titulo: <br>$titulo<h2>";
            echo "</div>";
            
            echo "<div class='conteudo'>";
            echo "<p>Conteúdo: <br><br>$conteudo<p>";
            echo "</div>";
>>>>>>> bb524020c61c86b9b561d720076c56a7800ab8e5
            
        }
    }

    
    $conn->close();
    ?>

</div>

</body>

</html>