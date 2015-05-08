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
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navloginform">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="#">Secret Diary</a>
			</div>

			<!-- Collect the nav links, forms, and other content for toggling -->
			<div class="collapse navbar-collapse" id="navloginform">
				<form class="navbar-form navbar-right" id="login-form">
					<div class="form-group">
						<input type="email" name="login_email" class="form-control" placeholder="E-mail">
					</div>
					<div class="form-group">
						<input type="password" name="login_password" class="form-control" placeholder="Password">
					</div>
					<input type="submit" class="btn btn-success" value="Log In">
				</form>
			</div><!-- /.navbar-collapse -->
		</div><!-- /.container-fluid -->
	</nav>
	
	<div class="container-fluid">
	<div class="row text-center">
		<div class="col-sm-6 col-sm-offset-3">
			<h1>Secret Diary</h1>
			<p class="lead">Your own private diary, with you wherever you go.</p>

			<p><b>Interested? Sign Up Below!</b></p>
		</div>
	</div>

	<div class="row text-center">
		<div class="col-sm-6 col-sm-offset-3">
			<form id="signup-form">
				<div class="form-group">
					<label for="signup-email">Email Address</label>
					<input type="email" name="signup_email" class="form-control" placeholder="Your email">
				</div>

				<div class="form-group">
					<label for="signup-email">Password</label>
					<input type="password" name="signup_password" class="form-control" placeholder="Password">
				</div>

				<input type="submit" name="signup_submit" class="btn btn-success btn-lg" value="Sign Up">
			</form>
		</div>
	</div>
	</div>


	<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
	<!-- Include all compiled plugins (below), or include individual files as needed -->
	<script src="js/bootstrap.min.js"></script>
</body>
</html>