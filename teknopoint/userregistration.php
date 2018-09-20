<?php 
	session_start();

	// variable declaration
	$username = "";
	$email    = "";
	$errors = array(); 
	$_SESSION['success'] = "";

	// connect to database
	$db = mysqli_connect('localhost', 'root', '', 'teknopoint');

	// REGISTER USER
	if (isset($_POST['reg_user'])) {
		// receive all input values from the form
		$name = mysqli_real_escape_string($db, $_POST['name']);
		$email = mysqli_real_escape_string($db, $_POST['email']);
		$phone = mysqli_real_escape_string($db, $_POST['phone']);
		if (count($errors) == 0) {
			 
			$query = "INSERT INTO cust_master (name, email, mobile_no) 
					  VALUES('$name', '$email', '$phone')";
			mysqli_query($db, $query);

			 
			header('location: index.php');
		}

	}

	 
 

?>