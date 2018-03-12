<?php include('server.php'); ?>

<?php session_start(); ?>
<?php 
	
	// Check to see if score is set
	if (!isset($_SESSION['score'])) {
		$_SESSION['score'] = 0;
	}

	$count = 0;
	if (isset($_POST['submit'])) {
		$number = $_POST['number'];
		$selected_choice = $_POST['choice'];
		$next_question = $number+1;

		$count++;

		/*
		*	Get total question
		*/

		$query = "SELECT * FROM questions WHERE category = 'be_verbs'";

		// Get results
		$results = $db->query($query) or die($db->error.__LINE__);
		$total = $results->num_rows;

		/*
		*	Get correct choice
		*/
		$query = "SELECT * FROM choices WHERE question_number = $number AND is_correct = 1";

		// Get result
		$result = $db->query($query) or die($db->error.__LINE__);

		// Get row
		$row = $result->fetch_assoc();

		// Set correct choice
		$correct_choice = $row['id'];

		// Compare
		if ($correct_choice == $selected_choice) {
			// Answer is correct
			$_SESSION['score']++;
		}

		// Check if it is the last question
		if ($count == $total) {
			header("Location: final_score.php");
			exit();
		} else {
			header("Location: be_verbs_test.php?n=".$next_question);
		}

	}

?>