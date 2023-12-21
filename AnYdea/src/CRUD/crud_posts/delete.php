<?php 
include "../connection.php";

$postID = $_POST['postID'];
$sql = "DELETE from posts WHERE PostID = $postID";
$resultado = $conn->query($sql);
header("location: ../../pages/index2.php");
?>