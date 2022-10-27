<?php
$subpage = "none";
// sanitise
if (isset($_GET["subpage"]))
{
	$tmp = $_GET["subpage"];
	if (strcmp($tmp, "none") == 0 ||
		strcmp($tmp, "motivation") == 0 ||
		strcmp($tmp, "publications") == 0)
	{
		$subpage = $tmp;
	}
}
$fullpage = "${page}.${subpage}";
?>

<div class="tagline">
Research
</div>

<?php
include "${fullpage}.php";
?>
