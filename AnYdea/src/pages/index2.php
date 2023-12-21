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
    </ul>
    </header>
    
    <ul>

        <div class="container">
            <a href="../pages/post.php"><svg class="plus" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-plus" viewBox="0 0 16 16">
  <path d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4"/>
</svg></a><br>
        </div>
    </ul>
    

    <div class="postagens">

    <?php
    include "../CRUD/connection.php";
    
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
                <?php if ($personID === $_SESSION['personID']):
                ?>
                    <form action="../CRUD/crud_posts/delete.php" method="post">
                    <input value="<?=$id?>" name="postID" style="display: none;">
                    <button type="submit">Deletar</button>
                </form>
                <?php endif ?>
            </div>
        
            
        <?php 
        endwhile;
        endif;
        $conn->close();
        ?>

    
 

</div>

</body>

</html>