<?php
	$theory = "myButtons";
	$video = "myButtons";
	$test = "myButtons";

	$menuLinkId = basename($_SERVER['PHP_SELF'], ".php");

	if ($menuLinkId == "adjectives") {
		$theory = 'myActiveButton';
	} elseif ($menuLinkId == "adjectives_video") {
		$video = 'myActiveButton';
	} elseif ($menuLinkId == "") {
		$test = 'myActiveButton';
	} elseif ($menuLinkId == "") {
		$test = 'myActiveButton';
	}
?>

<a class="<?php echo $theory; ?>" href="adjectives.php">Theory</a>
<a class="<?php echo $video; ?>" href="adjectives_video.php">Video</a>
<a class="<?php echo $test; ?>" href="">Test</a>
