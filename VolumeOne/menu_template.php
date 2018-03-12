<?php
	$theory = "myButtons";
	$video = "myButtons";
	$test = "myButtons";

	$menuLinkId = basename($_SERVER['PHP_SELF'], ".php");

	if ($menuLinkId == "singular_plural_nouns") {
		$theory = 'myActiveButton';
	} elseif ($menuLinkId == "singular_plural_nouns_video") {
		$video = 'myActiveButton';
	} elseif ($menuLinkId == "singular_plural_nouns_test") {
		$test = 'myActiveButton';
	} elseif ($menuLinkId == "final_score.php") {
		$test = 'myActiveButton';
	}
?>

<a class="<?php echo $theory; ?>" href="singular_plural_nouns.php">Theory</a>
<a class="<?php echo $video; ?>" href="singular_plural_nouns_video.php">Video</a>
<a class="<?php echo $test; ?>" href="singular_plural_nouns_test.php?n=1">Test</a>
