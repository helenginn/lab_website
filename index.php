<?php
$page = "home";
// sanitise
if (isset($_GET["page"]))
{
	$tmp = $_GET["page"];
	if (strcmp($tmp, "home") == 0 ||
		strcmp($tmp, "research") == 0 ||
		strcmp($tmp, "join") == 0 ||
		strcmp($tmp, "members") == 0 ||
		strcmp($tmp, "contact") == 0)
	{
		$page = $tmp;
	}
}

?>


<html>
<header>
<link rel="stylesheet" type="text/css" href="main.css"/>
</header>

<body>

<!-- Logo and title -->
<div class="banner">
<li class="container">
<ul class="flexitem">The Protein Machinists</ul>
<ul class="flexitem"></ul>
<ul class="flexitem"><span class="boldable"><a href="?page=home">Home</a></span></ul>
<ul class="flexitem dropdown">
  <span class="boldable"><a href="?page=research">Research</a></span>
  <div class="dropdown-content">
    <p class="dropitem boldable">
		<a href="?page=research&subpage=motivation" class="white">
			Motivation
		</a>
	</p>
    <p class="dropitem boldable">
		<a href="?page=research&subpage=publications" class="white">
			Publications
		</a>
	</p>
  </div>
</ul>

<ul class="flexitem dropdown">
  <span class="boldable"><a href="?page=join">Join</a></span>
  <div class="dropdown-content">
    <p class="dropitem boldable">
		<a href="?page=join&subpage=positions" class="white">
			Open positions
		</a>
	</p>
    <p class="dropitem boldable" style="height: 40px;">
		<a href="?page=join&subpage=choosing" class="white">
			Choosing a good group leader
		</a>
	</p>
    <p class="dropitem boldable">
		<a href="?page=contact" class="white">
			Contact
		</a>
	</p>
  </div>
</ul>

<ul class="flexitem dropdown">
  <span class="boldable">
<a href="?page=members">Members</a></span>
</ul>

<ul class="flexitem boldable">
<a href="?page=contact">
Contact
</a>
</ul>
</li>
</div>

<div class="content">
<div class="spacer"></div>
<div class="bulk">
<?php include "${page}.php"; ?>
</div>
<div class="spacer"></div>
</div>

</body>
</html>
