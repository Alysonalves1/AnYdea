<!DOCTYPE html>
<html lang="en">



<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AnYdea</title>
    <link rel="stylesheet" href="../css/profile.css">
</head>

<body>
<<<<<<< HEAD
    <div class="container">
        <div class="main">
            <div class="topbar">
                <a href="../../index.php">logout</a>
                <a href="./index2.php">Home</a>
            </div>
            <div class="row">
                <div class="col-md-4 mt-1">
                    <div class="card text-center sidebar">
                        <div class="card-body">
                            <img src="../img/do-utilizador.png" class="rounded-circle" width="150">


                            <div class="mt-3">
                                <?php
                                include("../CRUD/connection.php");

                                session_start();

                                $email = $_SESSION['email'];

                                $sql = "SELECT nome FROM user WHERE email='$email'";
                                $result = $conn->query($sql);

                                if ($result->num_rows > 0) {
                                    $row = $result->fetch_assoc();
                                    $nomeUsuario = $row['nome'];
                                    echo "<h2>$nomeUsuario</h2>";
                                } else {
                                    echo "Nome de usuário não encontrado";
                                }


                                
                                ?>


                            </div>
                        </div>
                    </div>

                    
                    <div class="col-md-8 mt-1">
                        <div class="card mb-3 content">
                            <a href="../CRUD/crud_posts/read_post.php">Meus posts</a>

                            <div class="card-body">
                            </div>

                            <div class="row">
                                <div class="col-md-3">

                                    <br><button class="" type="button">editar perfil</button>
                                    <h5>Contato:</h5>
                                </div>
                                asfd
                                <div class="col-md-9 text-secondary">
                                    <form action="../CRUD/crud_user/delet_user.php" method="post">
                                        <input type="submit" name="delete_account" value="Excluir Conta">
                                    </form>
                                </div>
                            </div>
                            <hr>
                        </div>
=======
   <div class="container">
    <div class="main">
        <div class="topbar">
            <a href="../../index.php">logout</a>
            <a href="./index2.php">Home</a>
        </div>
        <div class="row">
            <div class="col-md-4 mt-1">
                <div class="card text-center sidebar">
                    <div class="card-body">
                        <img src="../img/do-utilizador.png" class="rounded-circle" width="150">
                        <div class="mt-3">
                            <h3>nome</h3>
                    </div>
                </div>
            </div>
            <div class="col-md-8 mt-1">
                <div class="card mb-3 content">
                    <h1 class="m-3 pt-3">Sobre</h1>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-3">
                                <h5>Nome</h5>
                            </div>
                            <div class="col-md-9 text-secondary">

                              
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-md-3">
                                <h5>Email</h5>
                            </div>
                            <div class="col-md-9 text-secondary">
                              
                               asfd
                            </div>
                        </div>
                        <hr>
>>>>>>> bb524020c61c86b9b561d720076c56a7800ab8e5
                    </div>
                </div>
            </div>
        </div>
    </div>
<<<<<<< HEAD
=======
   </div>
>>>>>>> bb524020c61c86b9b561d720076c56a7800ab8e5


</body>

</html>