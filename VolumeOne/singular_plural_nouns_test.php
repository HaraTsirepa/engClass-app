<?php include('server.php'); ?>

<?php
	
	// Set question number
	$number = (int) $_GET['n'];


	/*
	*  Get Total number of Questions
	*/
	$query = "SELECT * FROM questions WHERE category = 'singular_plural'";

	// Get results
	$results = $db->query($query) or die($db->error.__LINE__);

	$total = $results->num_rows;


	/*
	*  Get Question
	*/
	$query = "SELECT * FROM questions WHERE question_number = $number AND category = 'singular_plural'";

	// Get result
	$result = $db->query($query) or die($db->error.__LINE__);

	$question = $result->fetch_assoc();


	/*
	*  Get Choices
	*/
	$query = "SELECT * FROM choices WHERE question_number = $number";

	// Get result
	$choices = $db->query($query) or die($db->error.__LINE__);

?>

<!DOCTYPE html>
<html>

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

		.list {
			list-style-type: none;
			padding: 0;
			margin: 0;
			width: 340px;
			background: #B2DFDB;
    		height: 100%;
    		position: fixed;
    		overflow: auto;
		}

		.list li a {
			list-style-type: none;
			display: block;
			padding: 21px;
			font-family: Arial;
			text-decoration: none;
			color: black;
		}

		.list li a:hover {
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

		.current {
			padding: 10px;			
			border: #8080ff solid 2px;
			margin: 20px 5px 10px 0;
			width: 250px;
		}
	</style>

<body>

	<ul class="list">
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

	<div style="margin-left: 350px; padding: 60px 16px; height: 100%;">
	
			<div id="menu">
				<div id="menuContainer">
					<?php include_once("menu_template.php"); ?>
				</div>
				<div id="bodyContainer">
					<div id="bodyContentContainer">
						
						<div class="current">Question <?php echo $question['question_number']; ?> of <?php echo $total; ?></div>
						<p class="question">
							<?php echo $question['text']; ?>
						</p>

						<form method="post" action="nextQuestionProcess.php">
							<ul class="choices" style="list-style: none;">
								<?php while ($row = $choices->fetch_assoc()) : ?>
									<li><input type="radio" name="choice" value="<?php echo $row['id']; ?>"><?php echo $row['text']; ?></li>
								<?php endwhile; ?>								
							</ul>
							<?php if ($number == $total) : ?>
								<input type="submit" name="submit" value="Submit">
							<?php else : ?>
								<input type="submit" name="submit" value="Next Question">
							<?php endif; ?>
							<input type="hidden" name="number" value="<?php echo $number; ?>">
						</form>
	  				</div>
	  			</div>
	  		</div>

	</div>
</body>
</html>
