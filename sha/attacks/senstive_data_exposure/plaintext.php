<?php

require '../../core.php';
if(loggedin())
{
    echo 'you are logged in.<a href="logout1.php">Logout</a>';
    die();
}
else
{
	require '../../connect.php';
    $title="User Credentials Sent in Plaintext";
    require 'login_post.php';
	if(isset($_POST['username']) && isset($_POST['password'])) 
{
	
if(!empty($_POST['username']) && !empty($_POST['password']))

{$username=$_POST['username'];
$password=$_POST['password'];

$query="SELECT Id from users_1 where Usename='$username' AND Passwod='$password'";

if($query_run=mysqli_query($link, $query))
{
    if(mysqli_num_rows($query_run)==0)
    	echo "Invalid Username and Password";
    else if(mysqli_num_rows($query_run)==1)

    {  
    	$user_id=mysqli_fetch_array($query_run, 0 ,Id);
    	$_SESSION['user1']=$username;
        error_reporting(E_ALL ^ E_WARNING); 
    	header('Location:admin.php');
    }

}

}
else
{	
echo "Enter the fields";
}
}
}
?>