<?php include('server.php'); ?>

<?php
	
	$query = "SELECT * FROM theory WHERE category='comp_super'";

	$outcome = $db->query($query) or die($db->error.__LINE__);


	$question = "SELECT * FROM pages WHERE category_page='singular_plural_theory'";

	$result = $db->query($question) or die($db->error.__LINE__);

?>


<!DOCTYPE html>
<html>
<head>
	<title>Adjectives</title>


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
			font-size: 20px; 
			position: fixed; 
			padding-left: 15px; 
			text-shadow: -2px 0 white, 0 1px white, 0 -1px white;
		}

		.btn {
		  padding: 7px;
		  font-size: 17px;
		  color: white;
		  margin-top: -4px;   /* adding space between the buttons */
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
			text-align: left;
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
				<h1 style="opacity: 0.7;">Comparative and Superlative Adjectives</h1>
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
				<?php include_once("menu_template3.php"); ?>
			</div>
			<div id="bodyContainer">
				<div id="bodyContentContainer">
					
					<?php while ($row = $outcome->fetch_assoc()) : ?>

						<p style="font-size: large; "><?php echo $row['theorytext']; ?></p>
					
					<?php endwhile; ?>
					
					<!-- T A B L E -->

					<table style="width: 60%; margin-left: 200px;">
 						<tr>
 						  <th>Case</th>
 						  <th>Adjective</th>
 						  <th>Comparative</th>
 						  <th>Superlative</th>
 						</tr>
					
 						<tr>
 						  <td width="30%">One syllable adjectives</td>
 						  <td>old<br>safe<br>big<br>hot</td>
 						  <td width="30%">older<br>safer<br>bigger<br>hotter</td>
 						  <td width="30%">the oldest<br>the safest<br>the biggest<br>the hottest</td>
 						</tr>

 						<tr>
 						  <td width="30%">Adjectives ending in y</td>
 						  <td>noisy<br30>dirty</td>
 						  <td width="30%">noisier<br>dirtier</td>
 						  <td width="30%">the noisiest<br>the dirtiest</td>
 						</tr>

 						<tr>
 						  <td width="30%">Adjectives with two or more syllables</td>
 						  <td>beautiful<br>boring</td>
 						  <td width="30%">more beautiful<br>more bring</td>
 						  <td width="30%">the most beautiful<br>the most boring</td>
 						</tr>

 						<tr>
 						  <td width="30%">Irregular adjectives</td>
 						  <td>good<br>bad<br>far</td>
 						  <td width="30%">better<br>worse<br>farther</td>
 						  <td width="30%">the best<br>the worst<br>the farthest</td>
 						</tr>
 					</table>

			
  				</div>
  			</div>
  		</div>
	</div>

</body>
</html>
