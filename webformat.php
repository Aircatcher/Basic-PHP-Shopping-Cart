<?php
// Include MySQL class
require_once('include/mysql.class.php');
// Include database connection
require_once('include/global.inc.php');
// Include functions
require_once('include/functions.inc.php');
?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<!---------------------------------- META ---------------------------------->
<meta charset="UTF-8" />
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
<meta name="viewport" content="width=device-width, initial-scale=1.0"> 
<meta name="description" content="Linkbook: Creating your online bookstore platform" />
<meta name="keywords" content="Arts & Photography, Design, Computer, Games, etc.." />
<meta name="author" content="Linkbook" />

<!-------------------------------- INCLUDES -------------------------------->
<link rel="shortcut icon" type="image/jpg" href="include/img/favicon.jpg"/>

<link rel="stylesheet" href="include/css/styles.css" />
<link rel="stylesheet" href="include/css/navbar.css" />
<link rel="stylesheet" href="include/css/button.css" />
<link rel="stylesheet" href="include/css/searchbox.css" />

<script src="include/js/prefixfree.min.js"></script>
<script src="include/js/styles.js"></script>
<script src="include/js/classie.js"></script>
<script src="include/js/progressButton.js"></script>
<script src="include/js/modernizr.custom.js"></script>

<!--------------------------- HEADER CONTENTS ---------------------------->
<!-- HEADER TITLE -->
<div style="position: fixed; top:0px; width:100%; background-color:#557FFF; z-index:2;">
	<a href="index.php" style="text-decoration:none;">
		<img src="include/img/favicon.jpg" width="30" height="30" style="position:relative; left:4px; top:2px"/>
		<font color="#fff" size="6em">
			&nbsp;<b>LINKBOOK</b>
		</font>
	</a>
</div>

<!-- MINI CART -->
<div style="position: absolute; top:9px; right:250px; z-index:2;">
	<a href="cart.php">Cart: <?php echo writeMiniCart(); ?></a>
</div>
<!-- SEARCH -->
<form id="tfnewsearch" method="GET" action="search.php">
	<div style="position: fixed; top:2px; right:10px; z-index:2;">
		<span><input class="card-slide" id="search" type="search" placeholder="Search for books..." /><label for="search">Search</label></span>
	</div>
</form>

<!----------------------------- NAVIGATION BAR ---------------------------->
<div style="padding 120px;">
	<?php if(loggedin()) { ?>
	<ulnavbar>
		<linavbar><a href='index.php'>Home</a></linavbar>
		<linavbar><a href='cart.php'>Cart</a></linavbar>
		<linavbar><a href='about.php'>About Us</a></linavbar>
		<linavbar><a href='profile.php'>Profile</a></linavbar>
		<linavbar><a href='register.php'>Register</a></linavbar>
		<linavbar><a href='logout.php'>Log Out</a></linavbar>
	</ulnavbar>
	<?php } else { ?>
	<ulnavbar>
		<linavbar><a href='index.php'>Home</a></linavbar>
		<linavbar><a href='cart.php'>Cart</a></linavbar>
		<linavbar><a href='about.php'>About Us</a></linavbar>
		<linavbar><a href='register.php'>Register</a></linavbar>
		<linavbar><a href='login.php'>Log In</a></linavbar>
	</ulnavbar>
	<?php } ?>
</div>

<!--------------------------------- FOOTER --------------------------------->
<div style="position: fixed; bottom:0px; width: 100%; background-color: #696969; z-index:3">
		<table align="left" width="500px">
			<!-- Footer Header -->
			<tr style="background-color:#696969">
				<td><font color="#696969"><b>.</b></font></td> <!-- Just to make this goes row exist & with transparent content -->
			</tr>
			<!-- Footer Contents -->
			<tr style="background-color:#696969">
				<td><font color="WHITE">Copyright &#169; Linkbook 2015</font></td>
			</tr>
		</table>
		<table align="right" width="225px">
			<!-- Footer Contents -->
			<tr align="center" style="background-color:#696969">
				<td>
					<a href=""><font color="WHITE"><b>Terms</b></font></a>
				</td>
				<td>
					<a href=""><font color="WHITE"><b>Privacy Policy</b></font></a>
				</td>
			</tr>
		</table>
</div>
