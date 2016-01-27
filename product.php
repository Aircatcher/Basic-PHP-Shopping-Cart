<?php 
// Include MySQL class
require_once('include/mysql.class.php');
// Include database connection
require_once('include/global.inc.php');
// Include functions
require_once('include/functions.inc.php');

// Check to see the URL variable is set and that it exists in the database
if (isset($_GET['id'])) {
	$id = preg_replace('#[^0-9]#i', '', $_GET['id']); 
	// Use this var to check to see if this ID exists, if yes then get the product 
	// details, if no then exit this script and give message why
	$sql = mysql_query("SELECT * FROM books WHERE id='$id' LIMIT 1");
	$productCount = mysql_num_rows($sql); // count the output amount
    if ($productCount > 0) {
		// get all the product details
		while($row = mysql_fetch_array($sql)){ 
			 $title = $row["title"];
			 $category = $row["cat"];
			 $description = $row["description"];
			 $price = $row["price"];
         }
		 
	} else {
		echo "That item does not exist.";
	    exit();
	}
		
} else {
	echo "Data to render this page is missing.";
	exit();
}
mysql_close();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title><?php echo $title; ?></title>
	<?php include "webformat.php";?>
	<link rel="stylesheet" href="include/css/style.css" type="text/css" media="screen" />
</head>
<body>
	<div id="navbar-padding">
		<br/><br/><br/>
		<table width="100%" border="0" cellspacing="0" cellpadding="15">
			<tr>
				<td width="16%" valign="top">
					<img src="include/img/products/<?php echo $id; ?>.jpg" width="200" height="225" alt="<?php echo $title; ?>"/>
					<a href="include/img/products/<?php echo $id; ?>.jpg">View Full Size Image</a>
					<form id="form1" name="form1" method="post" action="cart.php">
						<input type="hidden" name="pid" id="pid" value="<?php echo $id; ?>" />
						<a href="cart.php?action=add&id=<?php echo $id; ?>">Add to cart</a>
					</form>
				</td>
				<td width="100%" valign="top" style="padding:10px">
					<h3><?php echo $title; ?></h3>
					<p align="justify">Category: <?php echo $category; ?> <br />
						<?php echo "Rp ".$price; ?><br /><br />
						<?php echo $description; ?><br /><br />
					</p>
				</td>
			</tr>
		</table>
		<br /><br /><br />
	</div>
</body>
</html>