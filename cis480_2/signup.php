<?php 

include 'connect.php';

$first = $_POST['first'];
$last = $_POST['last'];
$user = $_POST['user'];
$pwd = $_POST['pwd'];

$sql = "INSERT INTO users (first, last, user, pwd) 
VALUES ('$first', '$last', '$user', '$pwd')";
$result = $connection->query($sql);

header("Location: index.php");

?>