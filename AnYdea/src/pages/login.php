<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AnYdea</title>

    <link rel="stylesheet" href="../css/register.css">

</head>
<body>
    <form class="formulario" action="../CRUD/read.php" method="POST">
        <div class="card">
            <div class="card-top">
                <img class="imagemlog" src="../img/do-utilizador.png" alt="usuario">
                <h2>Login</h2>
            </div>


            <div class="group">
                <label>Email</label>
                <input type="email" name="email" placeholder="Digite seu Email" required>
            </div>

            <div class="group">
                <label>Senha</label>
                <input type="password" name="senha" placeholder="Digite sua Senha" required>
            </div>

            <?php
            session_start();
            // Exibe a mensagem, se houver
            if (isset($_SESSION['mensagem'])) {
                echo '<p class="mensagem">' . $_SESSION['mensagem'] . '</p>';
                unset($_SESSION['mensagem']); // Limpa a mensagem
            }
            ?>
            
            <div class="group btn">
                <button type="submit">ACESSAR</button>
            </div>
            
            <a class="back" href="../../index.php">voltar</a>
        </div>
    </form>
</body>
</html>