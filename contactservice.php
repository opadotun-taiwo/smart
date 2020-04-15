<?php 
	session_start();

	// variable declaration
	$name = "";
	$email    = "";
	$message = ""; 
	$_SESSION['success'] = "";

	// connect to database
	$db = mysqli_connect('localhost', 'root', '', 'contact');

	// REGISTER USER
	if (isset($_POST['user_contact'])) {
		// receive all input values from the form
		$name = mysqli_real_escape_string($db, $_POST['username']);
		$email = mysqli_real_escape_string($db, $_POST['email']);
		$message = mysqli_real_escape_string($db, $_POST['message']);


		$query = "INSERT INTO user_contact (name, email, message) 
					  VALUES('$username', '$email', '$message')";
			mysqli_query($db, $query);
			$_SESSION['success'] = "You are now logged in";
			header('location: index.php');
		
}

		// register user if there are no errors in the form
		
			

			

	
