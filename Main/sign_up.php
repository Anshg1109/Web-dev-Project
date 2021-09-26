<?php 
session_start();

	include("connection.php");



	if($_SERVER['REQUEST_METHOD'] == "POST")
	{
		//something was posted
		$username = $_POST['username'];
		$email = $_POST['email'];
    $password = $_POST['password'];

		if(!empty($username) && !empty($password) && !is_numeric($username))
		{

			//save to database
			
			$query = "insert into user(username, email, password) values ('$username', '$email', '$password' )";

			mysqli_query($con, $query);




      header("Location: Sign-in.html");
			die;
		}else
		{
			echo "Please enter some valid information!";
		}
	}
?>