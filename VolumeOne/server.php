<?php
	
	session_start();

	$id = "";
	$username = "";
	$email = "";
	$firstname = "";
	$lastname = "";
	$errors = array();

	$textfield = "";
	$category_value = "";

	$name = "";

	//$user_id = 1;

	date_default_timezone_set('Europe/Athens');

	//connect to the database

	$db = mysqli_connect('localhost', 'root', '', 'registrationdb');


	//if the register button is clicked
	if (isset($_POST['register'])) {		//this 'register' is the same as in the register.php file in the <button> tag with name="register"...
											//These two must be the same! 
		$username = mysql_real_escape_string($_POST['username']);
		$email = mysql_real_escape_string($_POST['email']);
		$password_1 = mysql_real_escape_string($_POST['password_1']);
		$password_2 = mysql_real_escape_string($_POST['password_2']);

		$firstname = mysql_real_escape_string($_POST['firstname']);
		$lastname = mysql_real_escape_string($_POST['lastname']);
		$age = mysql_real_escape_string($_POST['age']);
		$gender = mysql_real_escape_string($_POST['gender']);

//
		$sql = "SELECT * FROM users WHERE username='$username'";
		$result = mysqli_query($db, $sql);
		$resultCheck = mysqli_num_rows($result);
		if ($resultCheck > 0) {
			array_push($errors,"This username is taken");
		}


		$sql = "SELECT * FROM users WHERE email='$email'";
		$result = mysqli_query($db, $sql);
		$resultCheck = mysqli_num_rows($result);
		if ($resultCheck > 0) {
			array_push($errors,"This email is already used");
		}
//

		// ensure that form fields are filled properly
		if (empty($username)) {
			array_push($errors, "Username is required"); // add error to errors array
		}
		if (empty($email)) {
			array_push($errors, "Email is required"); // add error to errors array
		}
		if (empty($password_1)) {
			array_push($errors, "Password is required"); // add error to errors array
		}

		if ($password_1 != $password_2) {
			array_push($errors, "The two passwords do not match");
		}

		if (empty($firstname)) {
			array_push($errors, "Firstname is required"); // add error to errors array
		}

		if (empty($lastname)) {
			array_push($errors, "Lastname is required"); // add error to errors array
		}

		if (empty($age)) {
			array_push($errors, "Age is required"); // add error to errors array
		}

		// if there are no errors, save user to database
		if (count($errors) == 0) {
			
			$sql = "INSERT INTO users (username, email, password, firstname, lastname, age, gender) 
					VALUES ('$username', '$email', '$password_1', '$firstname', '$lastname', '$age', '$gender')";
			mysqli_query($db,$sql);
			$_SESSION['username'] = $username;
			
			header('location: index.php');  // redirect to home page
		}

	}


	// log user in from login page
	if (isset($_POST['login'])) { 
		$username = mysql_real_escape_string($_POST['username']);
		$password = mysql_real_escape_string($_POST['password']);
		$id1 = mysql_real_escape_string($_POST['id']);

		// ensure that form fields are filled properly
		if (empty($username)) {
			array_push($errors, "Username is required"); // add error to errors array
		}
		if (empty($password)) {
			array_push($errors, "Password is required"); // add error to errors array
		}

		if (count($errors) == 0) {
			$query = "SELECT * FROM users WHERE username='$username' AND password='$password'";
			$result = mysqli_query($db,$query);

			if (mysqli_num_rows($result) == 1) {
				//log user in
				$_SESSION['username'] = $username;
				$_SESSION['id'] = $id1;
				header('location: index.php');  // redirect to home page
			}
			else{
				array_push($errors, "wrong username/password combination");
			}
		}
	}

	// log teacher in from login_teacher page
	if (isset($_POST['login_teacher'])) { 
		$username = mysql_real_escape_string($_POST['username']);
		$password = mysql_real_escape_string($_POST['password']);

		// ensure that form fields are filled properly
		if (empty($username)) {
			array_push($errors, "Username is required"); // add error to errors array
		}
		if (empty($password)) {
			array_push($errors, "Password is required"); // add error to errors array
		}

		if (count($errors) == 0) {
			$query = "SELECT * FROM teachers WHERE username='$username' AND password='$password'";
			$result = mysqli_query($db,$query);
			if (mysqli_num_rows($result) == 1) {
				//log teacher in
				$_SESSION['username'] = $username;
				header('location: index_teacher.php');  // redirect to home page
			}
			else{
				array_push($errors, "wrong username/password combination");
			}
		}
	}

	// logout as a student
	if (isset($_GET['logout'])) {
		session_destroy();
		unset($_SESSION['username']);
		unset($_SESSION['id']);
		header('location: login.php');
	}

	// logout as a teacher
	if (isset($_GET['logout'])) {
		session_destroy();
		unset($_SESSION['username']);
		header('location: login_teacher.php');
	}


	// INSERT the components of the textarea and the corresponding category in the table theory of the database
	if (isset($_POST['insert'])) {
		$category_value = mysql_real_escape_string($_POST['category_value']);
		$textfield = mysql_real_escape_string($_POST['textfield']);

		$insert = "INSERT INTO theory (category, theorytext) VALUES ('$category_value', '$textfield')";
		mysqli_query($db,$insert);
	}
	
	// LIKE - DISLIKE BUTTON :

	// if user has clicked the like or dislike button
	if (isset($_POST['action'])) {
		$post_id = mysql_real_escape_string($_POST['post_id']);
		$action = mysql_real_escape_string($_POST['action']);
		//$id_user = mysql_real_escape_string($_POST['id_user']);
		$name = $_SESSION['username'];

		switch ($action) {
			case 'like':
				$sql = "INSERT INTO like_dislike_info (post_id, rating_action, username)
						VALUES ('$post_id', '$action', '$name')
						ON DUPLICATE KEY UPDATE rating_action='like'";
				break;

			case 'dislike':
				$sql = "INSERT INTO like_dislike_info (post_id, rating_action, username)
						VALUES ('$post_id', '$action', '$name')
						ON DUPLICATE KEY UPDATE rating_action='dislike'";
				break;
			
			case 'unlike':
				$sql = "DELETE FROM like_dislike_info WHERE username='$name' AND post_id='$post_id'";
				break;

			case 'undislike':
				$sql = "DELETE FROM like_dislike_info WHERE username='$name' AND post_id='$post_id'";
				break;

			default:
				break;
		}

		// execute query
		mysqli_query($db, $sql);
		// return number of likes
		echo getRating($post_id);
		exit(0);
	}

	// Get total number of likes and dislikes for a particular page
	function getRating($id){
	 global $db;
	 $rating = array();

	 $likes_query = "SELECT COUNT(*) FROM like_dislike_info WHERE post_id='$id' AND rating_action='like'";
	 $dislikes_query = "SELECT COUNT(*) FROM like_dislike_info WHERE post_id='$id' AND rating_action='dislike'";

	 $likes_rs = mysqli_query($db, $likes_query);
	 $dislikes_rs = mysqli_query($db, $dislikes_query);

	 $likes = mysqli_fetch_array($likes_rs);
	 $dislikes = mysqli_fetch_array($dislikes_rs);

	 $rating = [
	 	'likes' => $likes[0],
	 	'dislikes' => $dislikes[0]
	 ];
	 return json_encode($rating);
	}	


	// Get total number of likes for a particular page
	function getLikes($id){
	  global $db;
	  $sql = "SELECT COUNT(*) FROM like_dislike_info WHERE post_id='$id' AND rating_action='like'";
	  $rs = mysqli_query($db, $sql);
	  $result = mysqli_fetch_array($rs);
	  return $result[0];
	}
	

	// Get total number of dislikes for a particular page
	function getDislikes($id)
	{
	  global $db;
	  $sql = "SELECT COUNT(*) FROM like_dislike_info WHERE post_id='$id' AND rating_action='dislike'";
	  $rs = mysqli_query($db, $sql);
	  $result = mysqli_fetch_array($rs);
	  return $result[0];
	}


	// Check if user has already liked a page or not
	function userLiked($post_id, $name)
	{
	  global $db;
	  
	  $sql = "SELECT * FROM like_dislike_info WHERE username='$name' AND post_id='$post_id' AND rating_action='like'";
	  $result = mysqli_query($db, $sql);
	  if (mysqli_num_rows($result) > 0) {
	  	return true;
	  }else{
	  	return false;
	  }
	}
	
	// Check if user has already disliked a page or not
	function userDisliked($post_id, $name)
	{
	  global $db;
	  
	  $sql = "SELECT * FROM like_dislike_info WHERE username='$name' AND post_id='$post_id' AND rating_action='dislike'";
	  $result = mysqli_query($db, $sql);
	  if (mysqli_num_rows($result) > 0) {
	  	return true;
	  }else{
	  	return false;
	  }
	}


	// W A L L   Functions:

	// Get the total number of posts from the database
	function get_total() {
		global $db;
		
		$sql = "SELECT * FROM parent_comment ORDER BY date DESC";
		$result = mysqli_query($db, $sql);
		$resultCheck = mysqli_num_rows($result);
		echo '<h1 class="all-posts">All Posts ('.$resultCheck.')</h1>';
	}

	function get_comments() {
		global $db;
		
		$sql = "SELECT * FROM parent_comment ORDER BY date DESC";
		$result = mysqli_query($db, $sql);

		foreach ($result as $item) {
			$date = new dateTime($item['date']);
			$date = date_format($date, 'M j, Y | H:i:s');
			$user = $item['username'];
			$comment = $item['text'];
			$par_code = $item['code'];

			echo '<div class="comment" id="'.$par_code.'" >'
				  .'<p class="user">'.$user.'</p>&nbsp;'
				  .'<p class="time">'.$date.'</p>'
				  .'<p class="comment-text">'.$comment.'</p>'
				  .'<a class="link-reply" id="reply" name="'.$par_code.'" >Reply</a>';

			$chi_sql = "SELECT * FROM child_comment WHERE par_code='$par_code' ORDER BY date DESC";
			$chi_result = mysqli_query($db, $chi_sql);
			$resultCheck = mysqli_num_rows($chi_result);

			if ($resultCheck == 0) {
				
			} else {
				echo '<a class="link-reply" id="child_comment" name="'.$par_code.'"><span id="tog_text">replies</span>('.$resultCheck.')</a>'
					 .'<div class="child-comments" id="C-'.$par_code.'">';

				foreach ($chi_result as $com) {
					$chi_date = new dateTime($com['date']);
					$chi_date = date_format($chi_date, 'M j, Y | H:i:s');
					$chi_user = $com['username'];
					$chi_com = $com['text'];
					$chi_par = $com['par_code'];

					echo '<div class="child" id="'.$par_code.'-C">'
							.'<p class="user">'.$chi_user.'</p>&nbsp;'
							.'<p class="time">'.$chi_date.'</p>'
							.'<p class="comment-text">'.$chi_com.'</p>'
							.'</div>';
				}

				echo '</div>';
			}
			echo '</div>';
		}
	}


	function generateRandomString($length = 6) {
		$characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
		$characterLength = strlen($characters);
		$randomString = '';

		for($i = 0; $i < $length; $i++) {
			$randomString .= $characters[rand(0, $characterLength - 1)];
		}
		return $randomString;
	}

?>
