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
    include "../AnYdea/src/CRUD/connection.php";
    
    $sql = "SELECT posts.titulo, posts.conteudo, user.nome, posts.PostID, posts.PersonID
    FROM posts 
    INNER JOIN user ON posts.PersonID = user.PersonID 
    ORDER BY posts.PostID DESC";

    $resultado = $conn->query($sql);

    session_start();
   
    ?>
    
    <?php if ($resultado->num_rows > 0):
         while ($row = $resultado->fetch_assoc()):
            $criador = $row['nome'];
            $titulo = $row['titulo'];
            $conteudo = $row['conteudo'];
            $id = $row['PostID'];
            $personID = $row['PersonID'];
           ?>
        <div class='title' id='<?=$id?>'>
            
            <h2>Publicado por: <?=$criador?></h2>
                
                <h2> Titulo: <br><?=$titulo?><h2>
            
                <div class='conteudo'>
                    
                    <p>Conteúdo: <br><br><?=$conteudo?><p>
                       <!-- <p><?php var_dump($_SESSION)?></p>       -->
                </div>

        <?php 
            endwhile;
            endif;
            $conn->close();
        ?>

    </div>

</body>

</html>