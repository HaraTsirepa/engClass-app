<?php include('menu_version2.php'); ?>
<?php include('server.php'); ?>


<!DOCTYPE html>
<html>
<head>
	<title>Search profiles</title>

	<!-- FONT - AWESOME (for icons) -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

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

		table {
			width: 600px;
			margin-top: 20px;
			margin-left: -150px;
			background-color: #B2DFDB;

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

	</style>
</head>

<body>

	<div class="content" style="margin-left: 300px; padding: 2px 16px; position: absolute;">

		<div class="title">
			<div id="c1">
				<h1>Search Profiles</h1>
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
					<a href="index.php?logout='1'"><button type="button" class="btn">Logout</button></a>
				</div>
		</div>
			<?php endif ?>

		<div style="padding: 20px; margin: 0; margin-left: 340px; height: 100%;">
			<form method="post">
				<input type="text" name="search" placeholder="Search for profiles here..." style="height: 35px; width: 230px; border: none; border-radius: 5px; padding-left: 5px;">
				<button type="submit" name="submit_search" style="height: 35px; width: 35px; border: none; border-radius: 5px; cursor: pointer;"><i class="fa fa-search"></i></button>
			</form>
	
			<?php 

				$search = "";
			
				if (isset($_POST['submit_search'])) {
					$search = mysqli_real_escape_string($db, $_POST['search']);
	
					// use explode function to seperate all keywords
					$keywords = explode(" ", $search);
			
					$sql = "SELECT * FROM users WHERE CONCAT(firstname, lastname, age) LIKE '%".$search."%' OR gender='$search'";
	
					// search for multiple keywords
					foreach ($keywords as $key) {
						$sql .= "OR CONCAT(firstname, lastname, age) LIKE '%$key%' OR gender='$key'";
					}
			
					$result = mysqli_query($db,$sql);
					$resultQuery = mysqli_num_rows($result);
	
					if ($resultQuery > 0) {
	
						echo "<table>
								<tr>
										<th>First Name</th>
										<th>Last Name</th>
										<th>Email</th>
										<th>Age</th>
										<th>Gender</th>
								</tr>";
						while ($row = $result->fetch_assoc()) {
							echo "<tr>
										<td>".$row['firstname']."</td>
										<td>".$row['lastname']."</td>
										<td>".$row['email']."</td>
										<td>".$row['age']."</td>
										<td>".$row['gender']."</td>
									</tr>";
						}
						echo "</table>";
					}
					else {
						echo "<p>There are no results matching your search!</p>";
					}
				}
	
			?>
	
		</div>
	</div>
</body>
</html>
