<?php include ('server.php'); ?>

<!DOCTYPE html>
<html>
<head>
	<title>Login for Teachers</title>
	<link rel="stylesheet" type="text/css" href="lo.css">
	<style type="text/css">

		.title{
			position: absolute;
			margin-top: 10px;
		}

		.title h1{
			color: white;
			font-size: 55px;
			margin-bottom: 10px;
			margin-left: 20px;
			font-family: Arial, Helvetica, sans-serif;
			opacity: 0.7;
			text-shadow: -2px 0 white, 0 1px white, 0 -1px white;
		}

		#c1 {
			float: left;
		}

		a{
			text-decoration: none;

		}

	</style>
</head>

<div class="title">
	<div id="c1">
		<a href="first_page.php"><h1>engClass.</h1></a>
	</div>
</div>

<body>

	<div class="header">
		<h2> Login</h2>
	</div>

	<form method="post" action="login_teacher.php">
		<!-- display validation errors here -->

		<?php include('errors.php'); ?>
		<div class="input-group">
			<label>Username</label>
			<input type="text" name="username" value="<?php echo $username; ?>">
		</div>
		<div class="input-group">
			<label>Password</label>
			<input type="password" name="password">
		</div>
		<div class="input-group">
			<button type="submit" name="login_teacher" class="btn">Login</button>
		</div>
	</form>

</body>
</html>