<!DOCTYPE html>
<html>
<head>
	<title>PHP Form Example : FORM 2</title>
</head>
<body>
	<h1>PHP Form Example : FORM 2 [ SUBMISSIONS ]</h1>

	<?php
	
		if ($_SERVER["REQUEST_METHOD"] == "POST") {

            $uname = $_POST["uname"];
			$firstname = $_POST["fname"];
			$lastname = $_POST["lname"];
			$email = $_POST["email"];
			$password = $_POST["psw"];
			$confirm_password = $_POST["cpsw"];

			echo "<p>Firstname: $firstname</p>";
			echo "<p>Lastname: $lastname</p>";
            echo "<p>Username: $uname</p>";
			echo "<p>Email: $email</p>";

			$password_length = strlen($password);
			echo "<p>Password length: $password_length</p>";

			if ($password == $confirm_password) {
				echo "<p>Passwords correct!</p>";
			} else {
				echo "<p>Passwords don't match! </p>";
			}
		} else {
			echo "<p>Error: POST method is required!</p>";
		}
	?>
