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
<script src="menu.js"></script>
<meta name="viewport" content="width=device-width, initial-scale=1"/>
<link rel="stylesheet" type="text/css" href="main.css"/>
<link rel="stylesheet" type="text/css" href="menu.css"/>
</header>

<body>

<!-- Logo and title -->
<div class="banner">
<li class="container">
<div class="flexitem" style="min-width: 240px;" >
  <span class="boldable"><a href="?page=home">The Protein Machinists</a></span>
</div>
<div class="flexitem"></div>
<div class="opennav" onclick="openNav()">Menu</div>
<div class="navigation" id="navigation">
<div class="flexitem dropdown"><div class="boldable"><a href="?page=home">Home</a></div></div>
<div class="flexitem dropdown" onclick="openSub(this, '?page=research')">
  <div class="boldable">Research</div>
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
</div>

<div class="flexitem dropdown" onclick="openSub(this, '?page=join')">
  <span class="boldable">Join</span>
  <div class="dropdown-content">
    <p class="dropitem boldable">
		<a href="?page=join&subpage=positions" class="white">
			Open positions
		</a>
	</p>
    <p class="dropitem boldable" style="height: 40px;">
		<a href="?page=join&subpage=choosing" class="white">
			Choosing a good group<br/>leader
		</a>
	</p>
    <p class="dropitem boldable">
		<a href="?page=contact" class="white">
			Contact
		</a>
	</p>
  </div>
</div>

<!--
<div id="mySidenav" class="sidenav">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
  <a href="<?php echo $home_link?>">Home</a>
  <a href="#"><?php echo ($de ? "Über uns" : "About us")?></a>
  <a href="<?php echo $contact_link?>"><?php echo ($de ? "Kontakt" : "Contact")?></a>
  <a href="#">Impressum</a>
</div>

<div class="opennav" onclick="openNav()">Menu</div>
-->

<div class="flexitem dropdown">
  <span class="boldable">
<a href="?page=members">Members</a></span>
</div>

<div class="flexitem dropdown" style="padding-bottom: 10px">
<span class="boldable">
<a href="?page=contact"> Contact </a>
</span>
</div>
</li>
</div>
</div>

<div class="content" onclick="closeNav()">
<div class="spacer"></div>
<div class="bulk">
<?php include "${page}.php"; ?>
</div>
<div class="spacer"></div>
</div>

</body>
</html>
