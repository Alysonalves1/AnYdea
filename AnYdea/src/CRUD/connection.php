<?php
$host = "localhost";
$user = "root";
$pass = "0905";
$database = "anydea";

$conn = new mysqli($host, $user, $pass, $database);

if ($conn->connect_error) {
    die("falha na conexão com o banco de dados: " . $conn->connect_error);
}