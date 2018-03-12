<?php include('menu_version3.php'); ?>
<?php include ('server.php');

	// if user is not logged in, they cannot access this page
	if (empty($_SESSION['username'])) {
		header('location: login_teacher.php');
	}

 ?>
<!DOCTYPE html>
<html>
<head>
	<title>Teacher's index</title>
	<!-- <link rel="stylesheet" type="text/css" href="st.css"> -->
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
	</style>
</head>
<body>

	<div class="content" style="margin-left: 300px; padding: 2px 16px; position: absolute;">

		<div class="title">
			<div id="c1">
				<h1>Home Page</h1>
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
					<a href="index_teacher.php?logout='1'"><button type="button" class="btn">Logout</button></a>
				</div>
		</div>
				<p style="font-size: 18px; margin-top: 20px; margin-left: 10px; height: 100%;">Welcome <strong><?php echo $_SESSION['username']; ?></strong>! You are the teacher of the class. You can manage anything... From theory to tests, but also take part in conversations with your students. Go teach some English!
				</p>
			
			<?php endif ?>
	</div>
</body>
</html>