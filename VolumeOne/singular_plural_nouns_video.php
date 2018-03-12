<?php include('server.php'); ?>

<?php
	
	$query = "SELECT * FROM theory WHERE category='singular_plural'";

	$outcome = $db->query($query) or die($db->error.__LINE__);


	$question = "SELECT * FROM pages WHERE category_page='singular_plural_theory'";

	$result = $db->query($question) or die($db->error.__LINE__);

?>


<!DOCTYPE html>
<html>
<head>
	<title>Singular and plural nouns</title>


	<!-- FONT - AWESOME (for icons) -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

	

	<!-- S T Y L I N G -->
	<link rel="stylesheet" type="text/css" href="style3.css" />
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


		table, th, td {
    		border: 1px solid #8080ff;
    		border-collapse: collapse;
    		font-size: large;
		}

		td {
		    padding: 5px;
		    text-align: left;    
		}

		th {
			background-color: #ccccff;
			padding: 5px;
			text-align: center;
		}

		#ratebutton {
    		background-color: Transparent;
    		background-repeat:no-repeat;
    		border: none;
    		cursor:pointer;
    		overflow: hidden;
    		outline:none;
		}

	</style>
</head>
<body>	
	<ul>
		<li><a href="singular_plural_nouns.php">Singular and Plural Nouns</a></li>
		<li><a href="be_verbs.php">'Be' Verbs</a></li>
		<li><a href="adjectives.php">Comparative and Superlative Adjectives</a></li>
		<li><a href="help.php">Help</a></li>
		<li><strong><a href="index.php">Back to Home Page</a></strong></li>
	</ul>

	<header class="title">
			<div id="c1">
				<h1 style="opacity: 0.7;">Singular and Plural Nouns</h1>
			</div>

			<?php if (isset($_SESSION['username'])): ?>
				<div id="c2" style="position: fixed; margin-top: -40px; margin-left: 820px;">
					<a href="index.php?logout='1'"><button type="button" class="btn">Logout</button></a>
				</div>
			<?php endif ?>
	</header>

	<div style="margin-left: 340px; padding: 60px 16px; height: 100%;">

		<div id="menu">
			<div id="menuContainer">
				<?php include_once("menu_template.php"); ?>
			</div>
			<div id="bodyContainer">
				<div id="bodyContentContainer">
					<p style="font-size: large;">The following videos are very helpful. Take a look!</p>
					<div align="center" style="padding-top: 20px;">

						<iframe width="560" height="315" src="https://www.youtube.com/embed/HS0rc9WiQ_8" frameborder="0" gesture="media" allow="encrypted-media" allowfullscreen></iframe>
						<p>Video No1</p>

						<iframe width="560" height="315" style="padding-top: 30px;" src="https://www.youtube.com/embed/8o-grcR8PWc" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
						<p>Video No2</p>
					</div>

  				</div>
  			</div>
  		</div>
	</div>



</body>
</html>
