<?php

include 'connect.php';

$user = $mysqli->escape_string($_POST['user']);
$pwd = $mysqli->escape_string($_POST['pwd']);

$sql = "SELECT * FROM users WHERE user='$user' AND pwd='$pwd'";
$result = mysqli_query($connection, $sql);

if ( $result->num_rows == 0 ){ // User doesn't exist
    $_SESSION['message'] = "User with that email doesn't exist!";
    header("location: error.php");
}
else { // User exists
    $user = $result->fetch_assoc();

    if ( password_verify($_POST['pwd'], $user['pwd']) ) {
        
        $_SESSION['user'] = $user['user'];
        $_SESSION['first'] = $user['first'];
        $_SESSION['first'] = $user['last'];
        
        // This is how we'll know the user is logged in
        $_SESSION['logged_in'] = true;

        header("location: index.php");
    }
    else {
        $_SESSION['message'] = "You have entered wrong password, try again!";
        header("location: error.php");
    }
}


?>
