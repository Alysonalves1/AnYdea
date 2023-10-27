<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AnYdea</title>

    <link rel="stylesheet" href="../css/cadastro.css">

</head>
<body>
    <form class="formulario" action="../CRUD/criar.php" method="POST">
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


            <div class="group btn">
                <button type="submit">Criar</button>
            </div>
            <a class="back" href="../../index.php">voltar</a>
        </div>
    </form>
</body>
</html>