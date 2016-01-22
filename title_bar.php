<div style="position: fixed; top:0px; width: 100%; background-color: #557FFF; z-index:10;"><font size="6em">LINKBOOK</font></div>
	<div style="padding 120px;">
		<?php
			if(loggedin()){
		?>
		<ulnavbar>
			<linavbar><a href='index.php'>Home</a></linavbar> 
			<linavbar><a href='profile.php'>Profile</a></linavbar>
			<linavbar><a href='logout.php'>Log Out</a></linavbar>
		</ulnavbar>
		<?php
		} else {
		?>
		<ulnavbar>
			<linavbar><a href='index.php'>Home</a></linavbar>
			<linavbar><a href='login.php'>Log In</a></linavbar>
			<linavbar><a href='register.php'>Register</a></linavbar>
		</ulnavbar>
		<?php } ?>
	</div>
</div>