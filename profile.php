<?php
// Include MySQL class
require_once 'include/mysql.class.php';
// Include database connection
require_once 'include/global.inc.php';
// Include functions
require_once 'include/functions.inc.php';
?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
	
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<title><?php echo $username ?> Panel &#0183; Linkbook</title>
	<?php include 'webformat.php' ?>
</head>

<body>
	<div id="navbar-padding">
		<div id="shoppingcart" style="margin-top:38px; padding:10px;">
			<h1><?php echo ucfirst($username); ?> Panel System</h1>
				<p>You are logged in as <b><?php echo $username ?></b> [Privilege: <?php echo $level_name ?>]</p>
			<?php
			if($user_level == 1)
			{
				echo "<div style='margin-top:40px;'></div>";
				echo "<table style='width:502px'>";
				echo	"<tr>";
				echo		"<th colspan='2'>User Management</th>";
				echo	"</tr>";
				echo 	"<tr>";
				echo 		"<td colspan='2' style='padding: 12px 0px;'><a href='admin.php?type=user'><center>User Settings</center></a></td>";
				echo	"</tr>";
				echo 	"<tr>";
				echo		"<th colspan='2'>Product Management</th>";
				echo	"</tr>";
				echo 	"<tr>";
				echo 		"<td style='padding: 12px 0px;'><a href='add_product.php?type=admin'><center>Add a Product</center></a></td>";
				echo 	"</tr>";
				echo "</table>";
			}
			else
			{
				echo "<div style='margin-top:40px;'></div>";
				echo "You have no access to this page.";
			}
			?>
		</div>
	</div>
</body>
</html>