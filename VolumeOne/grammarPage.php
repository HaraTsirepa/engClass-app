<?php include ('server.php');

	// if user is not logged in, they cannot access this page
	if (empty($_SESSION['username'])) {
		header('location: login.php');
	}

 ?>

<!DOCTYPE html>
<html>
<head>
	<title>Grammar page</title>
	<style>

		body {
    		margin: 0;
    		padding: 0;
    		background-image: url("../../VolumeOne/images/education.jpg");
			background-repeat: no-repeat;
			background-attachment: fixed;
			background-size: 1455px 637px;
		}

		ul {
			list-style-type: none;
			padding: 0;
			margin: 0;
			width: 340px;
			background: #B2DFDB;
    		height: 100%;
    		position: fixed;
    		overflow: auto;
		}

		li a {
			list-style-type: none;
			display: block;
			padding: 21px;
			
			font-family: Arial;
			text-decoration: none;
			color: black;
		}

		li a:hover {
			background: #b3b3ff;
			transition: linear all 0.40s;
			margin-left: 3px;
		}

		header {
			margin-left: 340px; 
			font-family: Arial; 
			height: 60px; 
			width: 100%; 
			background: #FFB74D; 
			line-height: 0px; 
			color: white; 
			font-size: 22px; 
			position: fixed; 
			padding-left: 15px; 
			text-shadow: -2px 0 white, 0 1px white, 0 -1px white;
		}

		.btn {
		  padding: 7px;
		  font-size: 17px;
		  color: white;
		  margin-top: -6px;   /* adding space between the buttons */
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
	<ul>
		<li><a href="singular_plural_nouns.php">Singular and Plural Nouns</a></li>
		<li><a href="be_verbs.php">'Be' Verbs</a></li>
		<li><a href="#">Comparative and Superlative Adjectives</a></li>
		<li><a href="help.php">Help</a></li>
		<li><strong><a href="index.php">Back to Home Page</a></strong></li>
	</ul>

	<header class="title">
			<div id="c1">
				<h1 style="opacity: 0.7;">Grammar Page</h1>
			</div>

			<?php if (isset($_SESSION['username'])): ?>
				<div id="c2" style="position: fixed; margin-top: -40px; margin-left: 820px;">
					<a href="index.php?logout='1'"><button type="button" class="btn">Logout</button></a>
				</div>
			<?php endif ?>
	</header>

	<div style="margin-left: 340px; padding: 90px 16px; height: 100%; font-family: Arial; font-size: 18px;">
		Welcome to the Grammar Page!!<br>
		Here you are going to learn about the most important rules of the English Grammar. Take step by step the lessons or choose whichever one you like and start your grammar adventure.
	</div>
</body>
</html>
