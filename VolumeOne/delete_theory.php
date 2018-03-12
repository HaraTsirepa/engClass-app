<?php include('menu_version3.php'); ?>
<?php include('server.php'); ?>
<?php

	if (isset($_GET['id']) && is_numeric($_GET['id'])) {
		$id = $_GET['id'];


		$delete = "DELETE FROM theory WHERE id='$id'";
		$remove = mysqli_query($db,$delete);

		if ($remove) {
			?>
			<script>alert('record deleted successfully');</script>
			<?php
			echo '<script type="text/javascript">window.location="manage_theory.php";</script>';
		}
		else
		{
			?>
			<script>alert('error in deleting record....');</script>
			<?php
		}

	}

?>