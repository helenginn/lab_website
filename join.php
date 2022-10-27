<?php
$subpage = "none";
// sanitise
if (isset($_GET["subpage"]))
{
	$tmp = $_GET["subpage"];
	if (strcmp($tmp, "none") == 0 ||
		strcmp($tmp, "choosing") == 0 ||
		strcmp($tmp, "positions") == 0)
	{
		$subpage = $tmp;
	}
}
$fullpage = "${page}.${subpage}";
?>

<?php
include "${fullpage}.php";
?>
