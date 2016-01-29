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
	<title>Admin Panel &#0183 Linkbook</title>
	<?php include "webformat.php"; ?>
</head>

<body>
<div id="navbar-padding">
	<?php
		if($user_level != 1) { header('location: profile.php'); }
	?>
</div>
<p>
	<?php
	if(isset($_GET['type']) && !empty($_GET['type'])) {
	?>
	<div id="navbar-padding">
		<div id="shoppingcart" style="margin-top:38px; padding:10px;">
			<h1>Admin Panel System</h1>
			<p>You are logged in as <b><?php echo $username ?></b> [Privilege: <?php echo $type ?>]</p>
			</div>
			<div>
				<table>
					<tr>
						<th style="width:200px; padding: 5px; background-color: #557FFF;">Users</th>
						<th style="width:150px; padding: 5px; background-color: #557FFF;">Options</th>
					</tr>
					<h1>User Settings</h1>
					<?php
						$list_query = mysql_query("SELECT id, username, type FROM users");
						while($run_list = mysql_fetch_array($list_query))
						{
							$id = $run_list['id'];
							$u_username = $run_list['username'];
							$u_type = $run_list['type'];
							?>
							<tr>
								<td><?php echo $u_username ?></td>
								<td><?php
										if($u_type == 'activated') {
											echo "<a href='option.php?id=$id&type=$u_type'>Deactivate User</a>";
										}
										else { echo "<a href='option.php?id=$id&type=$u_type'>Activate User</a>"; }
									?>
								</td>
							</tr>
						<?php
						}
						?>
				</table>
				<?php
				} else { echo "<br/><h1>Select Options</h1>"; }
				?>
			</div>
</p>
</body>
</html>