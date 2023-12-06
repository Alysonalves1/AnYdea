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

    <input type="submit" value="Publicar"><br>
    <a href="../../index.php" >Cancelar</a>
    </form>

</div>
</body>
</html>