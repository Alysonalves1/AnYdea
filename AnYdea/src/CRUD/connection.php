<?php
$host = "localhost";
$user = "root";
<<<<<<< HEAD
$pass = "root";
=======
$pass = "ruan123";
>>>>>>> bb524020c61c86b9b561d720076c56a7800ab8e5
$database = "anydea";

$conn = new mysqli($host, $user, $pass, $database);

if ($conn->connect_error) {
    die("falha na conexão com o banco de dados: " . $conn->connect_error);
}