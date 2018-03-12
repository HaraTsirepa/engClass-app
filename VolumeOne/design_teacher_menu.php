<!DOCTYPE html>
<html>
<head>
	<title>Teacher login</title>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<style type="text/css">
		body {
			padding: 0;
			margin: 0;
		}

		.menu ul{
			
			list-style: none;
			margin: 0;
			padding: 0;
			font-family: Arial, Helvetica, sans-serif;	
			font-size: 14px;
			height: 200px;
    		
		}

		.menu ul li{
			padding: 15px;
			position: relative;
			width: 220px;			
			vertical-align: middle;
			background-color: #00695C;
			border-top: 1px solid #B2DFDB;
			border-right: 5px solid #FFF176;
			transition:all 0.3s;
			
		}

		.menu ul li:hover{
			background-color: #00BFA5;
		}

		.menu ul ul{
			transition: all 0.3s;
			opacity: 0;
			position: absolute;
			visibility: hidden;
			left: 102%;
			top: -2%;
		}

		.menu ul li:hover > ul{
			opacity: 1;
			visibility: visible;
		}

		.menu ul a{
			color: #fff;
			text-decoration: none;
		}

		span{
			margin-right: 15px;
		}


	</style>
</head>
<body>

	<div class="menu">
		<ul>
			<li><a href=""><span class="fa fa-file-text-o"></span>Manage Theory</a>
				<ul>
					<li><a href="add_theory.php">Add Theory</a></li>
					<li><a href="manage_theory.php">Edit Theory</a></li>
				</ul>
			</li>
			<li><a href=""><span class="fa fa-edit"></span>Manage Test</a>
				<ul>
					<li><a href="">Add Test</a></li>
					<li><a href="">Edit Test</a></li>
					<li><a href="">Delete Test</a></li>
				</ul>
			</li>
			<li><a href=""><span class="fa fa-id-badge"></span>Search Profiles</a></li>
			<li><a href=""><span class="fa fa-bar-chart"></span>See Charts</a></li>
			<li><a href=""><span class="fa fa-group"></span>Manage Group Assignments</a></li>
		</ul>
	</div>
</body>
</html>