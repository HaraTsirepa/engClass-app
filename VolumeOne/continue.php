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
			margin-top: 170px;
			margin-left: 600px;
			font-family: Arial, Helvetica, sans-serif;
			font-size: large;
			font-weight: bold;
		}

	</style>
</head>
<body>
	
	
		<div class="title">
			<div id="c1">
				<a href="first_page.php"><h1>Welcome to engClass.</h1></a>
				<h3>Learn and teach English with the easiest way</h3>
			</div>
			<div id="c2">
				
				<a href="register.php"><button type="button" name="grammar" class="btn">Sign up</button></a>
			</div>
		</div>

		<div class="bubbles">
			<p>Please sign up to continue! </p>
		</div>

</body>
</html>