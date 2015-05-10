<?php
	include("connection.php");

	session_start();

	if (isset($_POST['login_submit'])) {
			# check if email is registered and md5 of password is equal to the registered
				# redirect to mainpage.php

		$email = $_POST['login_email'];
		$password = $_POST['login_password'];

		if ($email == "" or
			!filter_var($email, FILTER_VALIDATE_EMAIL) or
			$password == "") {
			$errors = "E-mail and/or password incorrect!";
		} else {
			$password = md5($password);

			$query = "SELECT id, password FROM users WHERE email='" . mysqli_real_escape_string($connection, $email) . "'";
			$result = mysqli_query($connection, $query);

			if ($row = mysqli_fetch_array ($result)) {
				if ($row['password'] == $password) {
					$_SESSION["id"] = $row["id"];
					header ("location: diary.php");
				}
			}
		}
	}

	if (isset($_POST['signup_submit'])) {
		$email = $_POST['signup_email'];
		$password = $_POST['signup_password'];

		$errors = "";


		if ($email == "" or !filter_var($email, FILTER_VALIDATE_EMAIL))
		{
			$errors .= "You have to enter a valid e-mail address.<br>";
		} else {
			# if its a valid e-mail check if it's in the database

			$query = "SELECT email FROM users WHERE email='" . mysqli_real_escape_string($connection, $email) . "'";

			$result = mysqli_query($connection, $query);
			
			if (mysqli_num_rows($result) > 0) {

				$errors = "This e-mail is already registered!";

			} else {

				if ($password == "" or strlen($password) < 8) {
					$errors .= "Password must have at least 8 characters.<br>";
				}

				if (!preg_match('/[A-Z]/', $password)) {
					$errors .= "Password must have at least one uppercase letter.<br>";
				}

				if ($errors == "") {
					# if there are no errors
					# insert email and md5 of password in the database

					$password = md5($password);

					# TODO: Filter data before inserting into the database
					$query = "INSERT INTO users(email, password) VALUES ('{$email}', '{$password}')";

					if (mysqli_query ($connection, $query)) {

						$_SESSION["id"] = mysqli_insert_id ($connection);
						header ("location: diary.php");

					} else {
						$errors = "Ocorreu um erro: " . mysqli_error($connection);
					}
				}
			}
		}
	}
?>