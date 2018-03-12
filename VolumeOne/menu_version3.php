<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<style type="text/css">

		body {
		    font-family: Arial, Helvetica, sans-serif;
		    padding: 0;
		  	margin: 0;
		}
		
		/* define a fixed width for the entire menu */
		.navigation {
		  width: 300px;
		  background-color: #B2DFDB;
		}
		
		/* reset our lists to remove bullet points and padding */
		.mainmenu{
		  list-style: none;
		  padding: 0;
		  margin: 0;
		  position: fixed;
		  width: 320px;
		  height: 100%;
		  background-color: #B2DFDB;
		}

		.submenu {
		  list-style: none;
		  padding: 0;
		  margin: 0;		 
		}
		
		/* make ALL links (main and submenu) have padding and background color */
		.mainmenu a {
		  display: block;
		  background-color: #B2DFDB;
		  text-decoration: none;
		  padding: 10px;
		  color: #000;
		}
		
		/* add hover behaviour */
		.mainmenu a:hover {
		    background-color: #b3b3ff;
		}
		
		
		/* when hovering over a .mainmenu item,
		  display the submenu inside it.
		  we're changing the submenu's max-height from 0 to 200px;
		*/
		
		.mainmenu li:hover .submenu {
		  display: block;
		  max-height: 200px;
		}
		
		/*
		  we now overwrite the background-color for .submenu links only.
		  CSS reads down the page, so code at the bottom will overwrite the code at the top.
		*/
		
		.submenu a {
		  background-color: #FFB74D;
		}
		
		/* hover behaviour for links inside .submenu */
		.submenu a:hover {
		  background-color: #FFA000;
		}
		
		/* this is the initial state of all submenus.
		  we set it to max-height: 0, and hide the overflowed content.
		*/
		.submenu {
		  overflow: hidden;
		  max-height: 0;
		  -webkit-transition: all 0.5s ease-out;
		}

		span{
			margin-right: 15px;
		}

	</style>
</head>
<body>
	<div class="navigation">
		<ul class="mainmenu">
			<li><a href="index_teacher.php"><span class="fa fa-home"></span>Home Page</a></li>
			<li><a href=""><span class="fa fa-file-text-o"></span>Manage Theory</a>
				<ul class="submenu">
					<li><a href="add_theory.php">Add Theory</a></li>
					<li><a href="manage_theory.php">Edit Theory</a></li>
				</ul>
			</li>

			<li><a href=""><span class="fa fa-edit"></span>Manage Test</a>
				<ul class="submenu">
					<li><a href="add_test.php">Add Test</a></li>
					<li><a href="">Edit Test</a></li>
				</ul>
			</li>

			<li><a href="search_profiles_teacher.php"><span class="fa fa-id-badge"></span>Search Profiles</a></li>
			<li><a href="wall_teacher.php"><span class="fa fa-comments"></span>Forum</a></li>
			<li><a href=""><span class="fa fa-bar-chart"></span>See Charts</a></li>
			<li><a href=""><span class="fa fa-group"></span>Manage Group Assignments</a></li>
			
		</ul>
	</div>
</body>
</html>