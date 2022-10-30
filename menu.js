/* Set the width of the side navigation to 250px */
function openNav() 
{
	document.getElementById("navigation").style.width = "50%";
}

/* Set the width of the side navigation to 0 */
function closeNav() 
{
	if (window.innerWidth <= 600)
	{
		document.getElementById("navigation").style.width = "0";
	}
} 

function openSub(e, link)
{
	if (window.innerWidth > 600)
	{
		window.location = link;
		return;
	}

	var dropdown = e;

	var content = dropdown.getElementsByClassName("dropdown-content")[0];
	console.log(content.style.height);
	var open = (content.style.height == "fit-content");

	var all = document.getElementsByClassName("dropdown-content");
	console.log(all.length);

	var i = 0;
	while (i < all.length)
	{
		console.log(i);
		all[i].style.height = "0px";
		all[i].style.marginTop = "0px";
		i++;
	}

	if (open)
	{
		window.location = link;
		return;
	}
	else
	{
		content.style.height = "fit-content";
		content.style.marginTop = "20px";
	}
}

window.addEventListener('resize', function(event) {
	if (window.innerWidth > 600)
	{
		openNav();
	}
	else
	{
		closeNav();
	}
}, true);
