<?php
	include ("connection.php");

	session_start ();

	if (isset($_SESSION["id"])) {

		$diary = mysqli_real_escape_string ($connection, $_POST["diary"]);
		$id = $_SESSION["id"];

		$query = "UPDATE users SET diary='$diary' WHERE id='$id' LIMIT 1";

		mysqli_query ($connection, $query);

	}
?>
