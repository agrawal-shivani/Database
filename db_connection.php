<?php
$server_name="localhost";
$user_name="root";
$password="admin";
$db_name="student";


$conn=mysqli_connect($server_name,$user_name,,$password,$db_name);

if($conn)
{
	echo "connection ok";
}
else
{
	die("connection failed because".mysqli_connect_error());
}
?>