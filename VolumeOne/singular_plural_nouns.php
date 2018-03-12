<?php include('server.php'); ?>

<?php
	
	$query = "SELECT * FROM theory WHERE category='singular_plural'";

	$outcome = $db->query($query) or die($db->error.__LINE__);


	$question = "SELECT * FROM pages WHERE category_page='singular_plural_theory'";

	$result = $db->query($question) or die($db->error.__LINE__);


	//if (isset($_SESSION['id'])) {
	//	$id1 = $_SESSION['id'];
	//}

	//	$problem = "SELECT * FROM users";

	//	$solution = $db->query($problem) or die($db->error.__LINE__);
	
?>


<!DOCTYPE html>
<html>
<head>
	<title>Singular and plural nouns</title>


	<!-- FONT - AWESOME (for icons) -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

	<!-- JQUERY -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

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
					
					<?php while ($row = $outcome->fetch_assoc()) : ?>

						<p style="font-size: large; "><?php echo $row['theorytext']; ?></p>
					
					<?php endwhile; ?>
					
					<!-- T A B L E -->

					<table style="width: 70%;" align="center">
 						<tr>
 						  <th colspan="2">Rule</th>
 						  <th>Examples</th>
 						</tr>
					
 						<tr>
 						  <td><b>Most nouns</b></td>
 						  <td>Add <em>s</em> to form the plural.</td>
 						  <td width="30%"><i>cat &rArr; cat<u>s</u><br/> truck &rArr; truck<u>s</u><br/> bug &rArr; bug<u>s</u></i></td>
 						</tr>

 						<tr>
 							<td width="35%"><b>Nouns that end in <em>s</em>, <em>sh</em>, <em>x</em>, <em>ch</em> or <em>z</em></b></td>
 							<td>Add <em>es</em> to form the plural. For words that end in <em>z</em>, add an extra <em>z</em> before the <em>es</em>.</td>
 							<td width="65%"><i>bus &rArr; bus<u>es</u><br />brush &rArr; brush<u>es</u><br />fox &rArr; fox<u>es</u><br />beach &rArr; beach<u>es</u><br />quiz &rArr; quiz<u>zes</u></i></td>
 						</tr>

 						<tr>
 							<td><b>Nouns ending in <em>f</em> or <em>fe</em></b></td>
 							<td width="40%">Some nouns ending in <em>f</em> or <em>fe</em> just add <em>s</em>. Sometimes it is necessary to change the <em>f</em> to a <em>v</em>. In that case, always end the word with <em>es</em>.</td>
 							<td width="30%"><i>roof &rArr; roof<u>s</u><br>safe &rArr; safe<u>s</u><br>shelf &rArr; shel<u>ves</u><br>wife &rArr; wi<u>ves</u></i></td>
 						</tr>
 					</table>

 					<?php if (isset($_SESSION['username'])): ?>
 						
 					
 					
 						<?php while ($line = $result->fetch_assoc()) : ?>

 								<?php $name = $_SESSION['username']; ?>
 								
 								 <!-- // $yes = $solution->fetch_assoc(); -->
 								<div class="post-info">
		
 									<!-- LIKE BUTTON -->
 								<form method="post">
									<button type="button" id="ratebutton" style="font-size: 25px; margin: 10px;"
										
										<?php if(userLiked($line['id'], $name)): ?>
											class="fa fa-thumbs-up like-btn"
										<?php else: ?>
											class="fa fa-thumbs-o-up like-btn"
										<?php endif ?>
		
										data-id="<?php echo $line['id']; ?>"
										 >
											
									</button>
		
									<span class="likes"><?php echo getLikes($line['id']); ?></span>
		
		
									<!-- DISLIKE BUTTON -->
 									<button type="button" id="ratebutton" style="font-size: 25px; margin: 10px;"
 										
		
 										<?php if(userDisliked($line['id'], $name)): ?>
											class="fa fa-thumbs-down dislike-btn"
										<?php else: ?>
											class="fa fa-thumbs-o-down dislike-btn"
										<?php endif ?>
		
 										data-id="<?php echo $line['id']; ?>" 
 										 >
 										
 									</button>
		
									<span class="dislikes"><?php echo getDislikes($line['id']); ?></span>
 								</form>
 								</div>
 							
 						<?php endwhile; ?> 	

 					<?php endif ?>

  				</div>
  			</div>
  		</div>
	</div>

	<!-- Add JQUERY scripts -->
	<script src="like_dislike.js"></script>

</body>
</html>
