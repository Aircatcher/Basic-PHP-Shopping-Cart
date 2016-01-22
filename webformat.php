<!-- INCLUDES -->
<link rel="stylesheet" href="css/styles.css" />
<link rel="stylesheet" href="css/navbar.css" />
<link rel="stylesheet" href="css/searchbox.css" />
<script src="js/prefixfree.min.js"></script>
<script src="js/styles.js"></script>
<script src="js/classie.js"></script>
<script src="js/progressButton.js"></script>

<!-- HEADER -->
<div style="position: fixed; top:0px; width:100%; background-color:#557FFF; z-index:2;">&nbsp;&nbsp;&nbsp;<font color="#fff" size="6em"><b>LINKBOOK</b></font></div>

<!-- SEARCH FORM -->
<form id="tfnewsearch" method="GET" action="http://localhost/linkbook">
	<div style="position: fixed; top:2px; right:10px; z-index:2;">
		<span><input class="card-slide" id="search" type="search" placeholder="Search for books..." /><label for="search">Search</label></span>
	</div>
</form>

<!-- NAVIGATION BAR -->
<div style="padding 120px;">
	<?php if(loggedin()) { ?>
	<ulnavbar>
		<linavbar><a href='index.php'>Home</a></linavbar>
		<div class="dropdown">
			<span><linavbar><a href="#">Categories</a></linavbar></span>
			<div class="dropdown-content">
				<linavbar><a href="#">Design</a></linavbar>
				<linavbar><a href="#">Fiction</a></linavbar>
				<linavbar><a href="#">Technology</a></linavbar>
				<linavbar><a href="#">Food & Drink</a></linavbar>
			</div>
		</div>
		<linavbar><a href='cart.php'>Cart</a></linavbar>
		<linavbar><a href='profile.php'>Profile</a></linavbar>
		<linavbar><a href='register.php'>Register</a></linavbar>
		<linavbar><a href='logout.php'>Log Out</a></linavbar>
	</ulnavbar>
	<?php } else { ?>
	<ulnavbar>
		<linavbar><a href='index.php'>Home</a></linavbar>
		<div class="dropdown">
			<span><linavbar><a href="#">Categories</a></linavbar></span>
			<div class="dropdown-content">
				<linavbar><a href="#">Design</a></linavbar>
				<linavbar><a href="#">Fiction</a></linavbar>
				<linavbar><a href="#">Technology</a></linavbar>
				<linavbar><a href="#">Food & Drink</a></linavbar>
			</div>
		</div>
		<linavbar><a href='cart.php'>Cart</a></linavbar>
		<linavbar><a href='register.php'>Register</a></linavbar>
		<linavbar><a href='login.php'>Log In</a></linavbar>
	</ulnavbar>
	<?php } ?>
	
</div>
