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
	<title>Login &#0183; Linkbook</title>
	<?php include "webformat.php"; ?>
</head>

<body>
	<div id="navbar-padding" style="margin-top:50px">
		<h1>Login to Your Account</h1>
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
					else
					{
						$check_login = mysql_query("SELECT id,type FROM users WHERE username='$username' AND password='$password'");
						if(mysql_num_rows($check_login) == 1)
						{
							$run = mysql_fetch_array($check_login);
							$id = $run['id'];
							$type = $run['type'];
							if($type == 'deactivated')
							{
								echo "<p>Your account has been deactivated by the site admin.</p>";
							}
							else
							{
								$_SESSION['id'] = $id;
								header('location: index.php');
							}
						}
						else { echo "<p>Wrong username or password!</p>"; }
					}
				}
			?>
			<br/>
			<div style="position: relative; z-index:2;">
				<span>
					<input class="balloon" id="username" type="text" name="username" placeholder="Your username..." />
					<label for="username">Username</label>
				</span>
			</div>
			<br/>
			<div style="position: relative; z-index:2;">
				<span>
					<input class="balloon" id="password" type="password" name="password" placeholder="Your password..." />
					<label for="password">Password</label>
				</span>
			</div>
			<br/>
			<div class="wrapper" style="position: relative; z-index:2;">
				<section><button name="submit" style="width:215px" class="progress-button" data-style="shrink" data-horizontal>Login</button></section>
			</div>
		</form>
	</div>
</body>
</html>