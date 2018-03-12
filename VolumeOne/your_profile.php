<?php include('menu_version2.php'); ?>
<?php include('server.php'); ?>

<!DOCTYPE html>
<html>
<head>
	<title>Your profile</title>

	<!-- FONT - AWESOME (for icons) -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

	<style type="text/css">
		
		body {
			
			height: 100%;	
			background-image: url("../../VolumeOne/images/education.jpg");
			background-repeat: no-repeat;
			background-attachment: fixed;
			background-size: 1366px 637px;
		}

		.title{
			
			width: 950px;
			margin-left: 10px;
			margin-top: 0px;
			overflow: auto;
		}

		h1{
			color: white;
			font-size: 45px;
			margin-top: 10px;
			margin-left: 10px;
			font-family: Arial, Helvetica, sans-serif;
			opacity: 0.7;
			text-shadow: -2px 0 white, 0 1px white, 0 -1px white;
		}

		#c1 {
			float: left;
		}

		#c2 {
			float: right;
			margin-top: 20px;
		}

		.btn {
		  padding: 7px;
		  font-size: 17px;
		  color: white;
		  margin-top: 0px;   /* adding space between the buttons */
		  width: 130px; /* buttons have the same width */
		  background: #FFCC80;
		  border: none;
		  border-radius: 5px;
		  transition-duration: 0.4s;
		  cursor: pointer;
		  float: right;
		}

		.btn:hover {
		    background-color: #5F9EA0;
		    color: white;
		}

		table {
			width: 400px;

			margin-top: 20px;
			margin-left: -60px;
			background-color: #B2DFDB;


		}
		table, th, td {
    		border: 1px solid #8080ff;
    		border-collapse: collapse;
    		font-size: large;
		}

		td {
		    padding: 10px;
		    text-align: center;  

		}

		th {
			background-color: #ccccff;
			padding: 5px;
			text-align: left;
		}

	</style>
</head>

<body>

	<div class="content" style="margin-left: 300px; padding: 2px 16px; position: absolute;">

		<div class="title">
			<div id="c1">
				<h1>Your Profile</h1>
			</div>

			<?php if (isset($_SESSION['success'])): ?>
				<div class="error success">
					<h3>
						<?php
							echo $_SESSION['success'];
							unset ($_SESSION['success']);
						?>
					</h3>
				</div>
			<?php endif ?>

			<?php if (isset($_SESSION['username'])): ?>
				<div id="c2">
					<a href="index.php?logout='1'"><button type="button" class="btn">Logout</button></a>
				</div>
		</div>

			<div style="padding: 20px; margin: 0; margin-left: 340px; height: 100%;">
				<?php $name = $_SESSION['username']; ?>
				<?php

					$sql = "SELECT * FROM users WHERE username='$name'";
					$result = mysqli_query($db, $sql);

					echo "<table>";
					while ($row = $result->fetch_assoc()) {
							echo "
									<tr><td>First Name:</td><td>".$row['firstname']."</td></tr>
									<tr><td>Last Name:</td><td>".$row['lastname']."</td></tr>
									<tr><td>Email:</td><td>".$row['email']."</td></tr>
									<tr><td>Age:</td><td>".$row['age']."</td></tr>
									<tr><td>Gender:</td><td>".$row['gender']."</td></tr>
									";
						}
					echo "</table>";
				 ?>

			</div>
			<?php endif ?>

	</div>
</body>
</html>
