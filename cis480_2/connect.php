<?php
$connection = mysqli_connect('localhost', 'cisfouei', 'Pa55w0rd!', 'cisfouei_cis');

if(mysqli_connect_errno())
{
echo "Error occurred while connecting with database ".mysqli_connect_errno();
}
session_start();
?>