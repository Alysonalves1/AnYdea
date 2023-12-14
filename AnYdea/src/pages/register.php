<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AnYdea</title>

    <link rel="stylesheet" href="../css/register.css">
    
</head>
<body>
    <form class="formulario" action="../CRUD/crud_user/add_user.php" method="POST">
        <div class="card">
            <div class="card-top">
                <h2>Cadastrar</h2>
            </div>

            <div class="group">
                <label>Nome</label>
                <input type="text" name="nome" placeholder="Digite seu Nome" required>
            </div>

            <div class="group">
                <label>Email</label>
                <input type="email" name="email" placeholder="Digite seu Email" required>
            </div>

            <div class="group">
                <label>Senha</label>
                <input type="password" name="senha" placeholder="Crie uma Senha" required>
            </div>

            <?php
            session_start();
            if (isset($_SESSION['mensagem'])) {
                echo '<p class="mensagem">' . $_SESSION['mensagem'] . '</p>';
                unset($_SESSION['mensagem']); // Limpa a mensagem
            }

            ?> 

            <input type="hidden" name="create_user" value="1">
            
            <div class="group btn">
                <button type="submit">Criar</button>
            </div>
            <a class="back" href="../../index.php">voltar</a>
        </div>
    </form>
</body>
</html>