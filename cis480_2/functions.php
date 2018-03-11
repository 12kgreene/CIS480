<?php

function user_exists($user, $connection)
{
$result = mysqli_query($connection,"SELECT id FROM users WHERE Username='$user'");

if(mysqli_num_rows($result) == 1)
{
return true;
}
else
{
return false;
}
}
function logged_in()
{
if(isset($_SESSION['user']))
{
return true;
}
else
{
return false;
}
}
?>