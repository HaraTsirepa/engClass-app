<?php

	// New comment
	if (isset($_POST['new_comment'])) {
		$new_com_name = $_SESSION['username'];
		$new_com_text = mysql_real_escape_string($_POST['comment']);
		$new_com_date = date('Y-m-d H:i:s');
		$new_com_code = generateRandomString();

		if (isset($new_com_text)) {
			$query = "INSERT INTO parent_comment (username, text, date, code) 
					  VALUES ('$new_com_name', '$new_com_text', '$new_com_date', '$new_com_code')";
			mysqli_query($db, $query);
		}
		
	}

	// New reply
	if (isset($_POST['new_reply'])) {
		$new_reply_name = $_SESSION['username'];
		$new_reply_text = mysql_real_escape_string($_POST['new-reply']);
		$new_reply_date = date('Y-m-d H:i:s');
		$new_reply_code = mysql_real_escape_string($_POST['code']);

		if (isset($new_reply_text)) {
			$query = "INSERT INTO child_comment (username, text, date, par_code) 
					  VALUES ('$new_reply_name', '$new_reply_text', '$new_reply_date', '$new_reply_code')";
			mysqli_query($db, $query);
		}
		
	}

?>