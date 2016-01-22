<?php
// Include database connection
require_once('include/global.inc.php');
// Include functions
require_once('include/functions.inc.php');
$id = $_GET['id'];
$type = $_GET['type'];

if($type == 'activated')
{
	mysql_query("UPDATE users SET type='deactivated' WHERE id='$id'");
	header('location: admin.php?type=user');
}
else if($type == 'deactivated')
{
	mysql_query("UPDATE users SET type='activated' WHERE id='$id'");
	header('location: admin.php?type=user');
}
?>