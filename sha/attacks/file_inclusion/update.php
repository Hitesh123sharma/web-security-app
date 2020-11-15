<?php
require '../connect.php';
session_start();
if(!mysqli_connect("localhost","root","") || !mysqli_select_db($link, 'project')){
die("Could not connect");}

$username_new=$_GET['username'];
$password_new=$_GET['password'];


//$query="UPDATE users_1 SET Usename='$username_new' and Passwod='$password_new' where Id='".$_SESSION['user_id']."'";

$query="UPDATE `users_1` SET `Usename`='$username_new',`Passwod`='$password_new' WHERE Id='".$_SESSION['user_id']."'";
if($query_run=mysqli_query($link, $query))
	{   
		header('Location:myaccount.php');
		
	}

?>