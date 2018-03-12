<?php include('menu_version3.php'); ?>
<?php include('server.php'); ?>

<?php
	
	if (isset($_POST['add'])) {
		
		// Get post variables
		$question_number = $_POST['question_number'];
		$question_text = $_POST['question_text'];
		$correct_choice = $_POST['correct_choice'];
		$category_value = $_POST['category_value'];

		// Choices array
		$choices = array();
		$choices[1] = $_POST['choice1'];
		$choices[2] = $_POST['choice2'];
		$choices[3] = $_POST['choice3'];
		$choices[4] = $_POST['choice4'];
		$choices[5] = $_POST['choice5'];

		// Question query
		$query = "INSERT INTO questions (question_number, text, category)
				  VALUES ('$question_number', '$question_text', '$category_value')";

		$insert_row = $db->query($query) or die($db->error.__LINE__);

		// Validate the insert
		if ($insert_row) {
			
			foreach ($choices as $choice => $value) {
				if ($value != '') {
					if ($correct_choice == $choice) {
						$is_correct = 1;
					}
					else {
						$is_correct = 0;
					}

					// Choice query
					$query = "INSERT INTO choices (question_number, is_correct, text)
							  VALUES ('$question_number', '$is_correct', '$value')";

					$insert_row = $db->query($query) or die($db->error.__LINE__);

					// Validate the insert
					if ($insert_row) {
						continue;
					}
					else {
						die('Error : ('.$mysqli->errno . ') '. $mysqli->error);
					}
				}
			}
			$msg = 'Question has been added';

		}

	}

	/*
	*  Get Total number of Questions
	*/
	$query = "SELECT * FROM questions";

	// Get results
	$results = $db->query($query) or die($db->error.__LINE__);

	$total = $results->num_rows;
	$next = $total + 1;

?>

<!DOCTYPE html>
<html>
<title>Add Test</title>
 	
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

		label{
			display:inline-block;
			width:190px;
			font-weight: bold;
		}
		
		input[type='text']{
			width:87%;
			padding:8px;
			border-radius:5px;
			border:1px #ccc solid;
		}
		
		input[type='number']{
			width:50px;
			padding:4px;
			border-radius:5px;
			border:1px #ccc solid;
		}

	</style>
<body>
	<div style="margin-left: 300px; padding: 2px 20px; position: absolute;">

		<div class="title">
			<div id="c1">
				<h1>Add Test</h1>
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
			<?php endif ?>
		</div>

		<?php
				if(isset($msg)){
					echo '<p>'.$msg.'</p>';
				}
		?>

		<form method="post" action="add_test.php" style="margin-left: 100px;">

			<label>Choose Chapter: </label>
			<select name="category_value" style="margin-bottom: 5px;" value="<?php echo $category_value; ?>">
				<option value="singular_plural">Singular and plural nouns</option>
				<option value="be_verbs">'Be' Verbs</option>
				<option value="comp_super">Comparative and superlative adjectives</option>
			</select>

			<p>
				<label>Question Number: </label>
				<input type="number" value="<?php echo $next; ?>" name="question_number" />
			</p>
			<p>
				<label>Question Text: </label>
				<input type="text" name="question_text" />
			</p>
			<p>
				<label>Choice #1: </label>
				<input type="text" name="choice1" />
			</p>
			<p>
				<label>Choice #2: </label>
				<input type="text" name="choice2" />
			</p>
			<p>
				<label>Choice #3: </label>
				<input type="text" name="choice3" />
			</p>
			<p>
				<label>Choice #4: </label>
				<input type="text" name="choice4" />
			</p>
			<p>
				<label>Choice #5: </label>
				<input type="text" name="choice5" />
			</p>
			<p>
				<label>Correct Choice Number: </label>
				<input type="number" name="correct_choice" />
			</p>
			<p>
				<input type="submit" name="add" value="Submit" />
			</p>
		</form>

	</div>
</body>
</html>