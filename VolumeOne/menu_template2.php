<?php
	$theory = "myButtons";
	$video = "myButtons";
	$test = "myButtons";

	$menuLinkId = basename($_SERVER['PHP_SELF'], ".php");

	if ($menuLinkId == "be_verbs") {
		$theory = 'myActiveButton';
	} elseif ($menuLinkId == "be_verbs_video") {
		$video = 'myActiveButton';
	} elseif ($menuLinkId == "") {
		$test = 'myActiveButton';
	} elseif ($menuLinkId == "") {
		$test = 'myActiveButton';
	}
?>

<a class="<?php echo $theory; ?>" href="be_verbs.php">Theory</a>
<a class="<?php echo $video; ?>" href="be_verbs_video.php">Video</a>
<a class="<?php echo $test; ?>" href="">Test</a>
