<?php
// Include MySQL class
require_once('include/mysql.class.php');
// Include database connection
require_once('include/global.inc.php');
// Include functions
require_once('include/functions.inc.php');
?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
	
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<title>Register &#0183 Linkbook</title>
	<?php include "webformat.php"; ?>
</head>

<body>
	<div id="navbar-padding" style="margin-top:50px;">
		<h1>Register a New Account</h1>
		<form method="POST" style="padding-top:5px; padding-left:24px;">
			<?php
			if(isset($_POST['submit']))
			{
				$username = $_POST['username'];
				$password = md5($_POST['password']);
				if(empty($username) or empty($password))
				{
						echo "<p>Fields Empty!</p>";
				}
				else $query = mysql_query("SELECT username FROM Users WHERE username='$username'");
				
				if (mysql_num_rows($query) != 0)
				{
					echo "User already exists";
				}
				else
				{
						mysql_query("INSERT INTO users VALUES('', '$username', '$password', '2', 'activated')");
						echo "<p>Succesfully Registered!</p>";
				}
			}
			?>
			<br/>
			<div style="position: relative;">
				<span>
					<input class="balloon" id="username" type="text" name="username" placeholder="Your username..." />
					<label for="username">Username</label>
				</span>
			</div>
			<br/>
			<div style="position: relative;">
				<span>
					<input class="balloon" id="password" type="password" name="password" placeholder="Your password..." />
					<label for="password">Password</label>
				</span>
			</div>
			<br/>
			<div class="wrapper" style="position: relative;">
				<section><button name="submit" style="width:215px" class="progress-button" data-style="filling" data-horizontal="">Register</button></section>
				<br/>
				<section><button onclick="location.href='index.php';" style="background-color:#FF2A2A; width:215px" class="progress-button" data-style="shrink" data-horizontal>Cancel</button></section>
			</div>
		</form>
	</div>
</body>
</html>