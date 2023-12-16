<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AnYdea</title>
    <link rel="stylesheet" href="../css/post.css">
</head>
<body>
<div class="formulario">

    <form action="../CRUD/save_post.php" method="POST">
        
    <label for="titulo">Título</label><br>
    <input type="text" name="titulo" maxlength="500" required><br><br>

    <label for="conteudo">Conteúdo:</label><br>
    <textarea name="conteudo" required></textarea><br>

    <input type="submit" href="../pages/index2.php" value="Publicar"><br>
    <a href="../pages/index2.php" >Cancelar</a>
    </form>
    <!-- <div>

    <h3>Faça um Comentário</h3> 

    <form action="processar_comentario.php" method="post">
        <input type="hidden" name="id_postagem" value="<?php echo $id_postagem; ?>">

        <label for="nome_usuario">Seu Nome:</label>
        <input type="text" id="nome_usuario" name="nome_usuario" required>

        <label for="comentario">Comentário:</label>
        <textarea id="comentario" name="comentario" rows="4" required></textarea>

        <button type="submit">Enviar Comentário</button>
    </form>
</div> -->
</div>
</body>
</html>