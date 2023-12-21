<!DOCTYPE html>
<html lang="en">



<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AnYdea</title>
    <link rel="stylesheet" href="../css/profile.css">
</head>

<body>
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

                                    
                                    <h5>Email:</h5>
                                    <?php
                                include("../CRUD/connection.php");


                                $email = $_SESSION['email'];

                                $sql = "SELECT email FROM user WHERE email='$email'";
                                $result = $conn->query($sql);

                                if ($result->num_rows > 0) {
                                    $row = $result->fetch_assoc();
                                    $emailUsuario = $row['email'];
                                    echo "<h2>$emailUsuario</h2>";
                                } else {
                                    echo "Email de usuário não encontrado";
                                }


                                
                                ?>
                                <div>
                                <button class="" type="button">editar perfil</button>
                                </div>
                            </div>
                                
                               <br><div class="col-md-9 text-secondary">
                                    <form action="../CRUD/crud_user/delete_user.php" method="post">
                                        <input style="display: none;" name="personID" value="<?php $_SESSION['personID']?>" >
                                    <button type="submit">
Deletar Conta
                                     </button>
                                    </form>
                                </div>
                            </div>
                            <hr>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


</body>

</html>