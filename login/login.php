<?php
	session_start();
	include("connection.php"); //Establishing connection with our database
	
	$error = ""; //Variable for storing our errors.
	if(isset($_POST["submit"]))
	{
		if(empty($_POST["usermail"]) || empty($_POST["password"]))
		{
			$error = "Both fields are required.";
		}else
		{
			// Define $username and $password
			$usermail=$_POST['usermail'];
			$password=$_POST['password'];
			echo $usermail ."<br>";


			// To protect from MySQL injection

			$usermail = mysqli_real_escape_string($db, $usermail);
			$password = mysqli_real_escape_string($db, $password);
			$password = md5($password);
			echo $password ."<br>";
			
			//Check username and password from database
			$sql="SELECT userID FROM users WHERE email='$usermail' and password='$password'";
			$result=mysqli_query($db,$sql);
			echo "sh";
			$row=mysqli_fetch_array($result) ;
			echo $row['password'];
			echo "you again 3";
			
			//If username and password exist in our database then create a session.
			//Otherwise echo error.
			
			if(mysqli_num_rows($row) == 1) {
				echo "me";
				$_SESSION['usermail'] = $usermail; // Initializing Session
				header("location: home.php"); // Redirecting To Other Page


			}
			else
			{
				$error = "Incorrect username or password.";
				echo $error;
			}

		}
	}

?>