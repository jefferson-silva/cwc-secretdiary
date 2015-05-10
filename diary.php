<?php
	include ("connection.php");

	session_start ();

	if (!isset($_SESSION["id"])) {
		header ("location: index.php");
	}
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
	<title>Secret Diary</title>

	<!-- Bootstrap -->
	<link href="css/bootstrap.min.css" rel="stylesheet">
		<link href="css/styles.css" rel="stylesheet">

	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->
</head>
<body>

	<nav class="navbar navbar-default">
		<div class="container-fluid">
			<!-- Brand and toggle get grouped for better mobile display -->
			<div class="navbar-header pull-left">
				<a class="navbar-brand" href="#">Secret Diary</a>
			</div>

			<div class="pull-right">
				<ul class="navbar-nav nav">
					<li>
						<a href="logout.php">Log Out</a>
					</li>
				</ul>
			</div>

		</div><!-- /.container-fluid -->
	</nav>
	
	<div class="container-fluid diary-container">
		<div class="row text-center">
			<div class="col-sm-10 col-sm-offset-1">

				<?php
						$id = $_SESSION["id"];
						$query = "SELECT diary FROM users WHERE id='{$id}'";

						$result = mysqli_fetch_array (mysqli_query ($connection, $query));
				?>				


				<textarea name="diary" id="diary" class="form-control" cols="30" rows="10"><?php echo $result["diary"]; ?></textarea>

			</div>
		</div>
	</div>


	<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
	<!-- Include all compiled plugins (below), or include individual files as needed -->
	<script src="js/bootstrap.min.js"></script>

	<script>
		$(".diary-container").css("min-height", $(window).height() - 100);
		$("#diary").css("height", $(window).height() - 100);

		$("#diary").change(function (data) {
			$.post("updatediary.php", {"diary": $("#diary").val()});
		});
	</script>
</body>
</html>