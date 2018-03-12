<?php include('server.php'); ?>

<!DOCTYPE html>
<html>
<head>
	<title>Register</title>
	<link rel="stylesheet" type="text/css" href="re.css">
	<style type="text/css">
		.title{
			position: absolute;
			margin-top: -80px;
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
		<h2> Register</h2>
	</div>

	<form method="post" action="register.php">

		<!-- display validation errors here -->

		<?php include('errors.php'); ?>

		<div class="input-group">
			<label>First Name</label>
			<input type="text" name="firstname" value="<?php echo $firstname; ?>">
		</div>

		<div class="input-group">
			<label>Last Name</label>
			<input type="text" name="lastname" value="<?php echo $lastname; ?>">
		</div>

		<div class="input-group">
			<label>Username</label>
			<input type="text" name="username" value="<?php echo $username; ?>">
		</div>

		<div class="input-group">
			<label>Email</label>
			<input type="text" name="email" value="<?php echo $email; ?>">
		</div>

		<div class="input-group">
			<label>Age</label>
			<input type="number" name="age" min="0" value="">
		</div>

		<div>
			<label>Gender</label><br>
			<input type="radio" name="gender" value="female" checked> Female
			<input type="radio" name="gender" value="male"> Male
			<input type="radio" name="gender" value="other"> Other
		</div>

		<div class="input-group">
			<label>Password</label>
			<input type="password" name="password_1">
		</div>

		<div class="input-group">
			<label>Confirm Password</label>
			<input type="password" name="password_2">
		</div>

		<div class="input-group">
			<button type="submit" name="register" class="btn">Register</button>
		</div>
		<p>
			Already a member? <a href="login.php">Sign in</a>
		</p>
	</form>

</body>
</html>