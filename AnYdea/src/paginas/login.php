<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AnYdea</title>

    <link rel="stylesheet" href="./src/css/login.css">

</head>
<body>
    <form class="formulario" action="logar.php" method="POST">
        <div class="card">
            <div class="card-top">
                <img class="imagemlog" src="./src/imagens/do-utilizador.png" alt="usuario">
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

            <div class="group">
                <label><input type="checkbox">Lembre-me</label>
                
            </div>

            <div class="group btn">
                <button type="submit">ACESSAR</button>
            </div>
            <a href="./index.php">voltar</a>
        </div>
    </form>
</body>
</html>