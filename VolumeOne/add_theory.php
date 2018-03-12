<?php include('menu_version3.php'); ?>
<?php include('server.php'); ?>

<?php
	
	$query = "SELECT * FROM theory";

	$outcome = $db->query($query) or die($db->error.__LINE__);


?>

<!DOCTYPE html>
<html>
<title>Add Theory</title>
 	
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

		.current {
			padding: 10px;			
			border: #8080ff solid 2px;
			margin: 20px 5px 10px 0;
			background-color: #B2DFDB;
			margin-left: 30px;
		}

	</style>
<body>
	<div style="margin-left: 300px; padding: 2px 20px; position: absolute;">

		<div class="title">
			<div id="c1">
				<h1>Add Theory</h1>
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

		<form method="post">

			<select name="category_value" style="margin-left: 230px; margin-bottom: 5px;" value="<?php echo $category_value; ?>">
				<option value="singular_plural">Singular and plural nouns</option>
				<option value="be_verbs">'Be' Verbs</option>
				<option value="comp_super">Comparative and superlative adjectives</option>
			</select>

			<textarea name="textfield" rows="10" cols="70" style="margin-left: 230px;" placeholder="Add theory here..."           		value="<?php echo $textfield; ?>"></textarea>
			<input type="submit" name="insert" value="Submit" style="margin-left: 230px;">

			<?php while ($row = $outcome->fetch_assoc()) : ?>
				<div class="current">
					
					<h4>Category: <?php echo $row['category']; ?></h4>
					<?php echo $row['theorytext']; ?>
						
				</div>
			<?php endwhile; ?>

		</form>

	</div>
</body>  	
</html>