<!DOCTYPE html>
<html>
<head>
	<title>Welcome page</title>
	<link rel="stylesheet" type="text/css" href="hello.css">
	<style type="text/css">
		
		a:visited{color: #FFCC80;}
		a{
			text-decoration: none;

		}

		.title{
			
			width: 1350px;
			margin-left: 0px;
			margin-top: 0px;
			overflow: auto;
		}

		h1{
			color: white;
			font-size: 55px;
			margin-top: 20px;
			margin-left: 20px;
			font-family: Arial, Helvetica, sans-serif;
			opacity: 0.7;
			text-shadow: -2px 0 white, 0 1px white, 0 -1px white;
		}

		.title h3{
			color: white;
			font-size: 20px;
			margin-top: 0px;
			margin-left: 20px;
			font-family: Arial, Helvetica, sans-serif;
			opacity: 0.8;
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
		  margin: 10px;   /* adding space between the buttons */
		  width: 130px; /* buttons have the same width */
		  background: #FFCC80;
		  border: none;
		  border-radius: 5px;
		  transition-duration: 0.4s;
		  cursor: pointer;
		}

		.btn:hover {
		    background-color: #5F9EA0;
		    color: white;
		}

		.bubbles {
			position: relative;
			margin-top: 130px;
			font-family: Arial, Helvetica, sans-serif;
		}

		#c3 {
			float: left;
			margin-left: 550px;
		}

		#c4 {
			float: right;
			margin-right: 300px;
		}

	</style>
</head>
<body>
	
	
		<div class="title">
			<div id="c1">
				<h1>Welcome to engClass.</h1>
				<h3>Learn and teach English with the easiest way</h3>
			</div>
			<div id="c2">
				<a href="continue.php"><button type="button" name="grammar" class="btn">Continue</button></a>
				<a href="register.php"><button type="button" name="grammar" class="btn">Sign up</button></a>
			</div>
		</div>

		
		<div class="bubbles">
			<div id="c3">
				<a href="login_teacher.php" >
					<img src="../../VolumeOne/images/teacher.jpeg" border="0" width="150" height="150">
					<h3>Login as a Teacher</h3>
				</a>
			</div>

			<div id="c4">
				<a href="login.php" >
					<img src="../../VolumeOne/images/student.jpeg" border="0" width="150" height="150">
					<h3>Login as a Student</h3>
				</a>
			</div>
		</div>
</body>
</html>