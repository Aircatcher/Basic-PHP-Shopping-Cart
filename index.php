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
	<title>Linkbook</title>
	<meta charset="UTF-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
	<meta name="viewport" content="width=device-width, initial-scale=1.0"> 
	<meta name="description" content="Progress Button Styles: Creative effects for loading buttons" />
	<meta name="keywords" content="progress button, loading button, 3d, loading indicator, progress indicator" />
	<meta name="author" content="Codrops" />
	<link rel="shortcut icon" href="../favicon.ico">
</head>

<body>
<?php include "webformat.php"; ?>
<div id="navbar-padding">
	<div id="shoppingcart" style="margin-top:38px;">
		<h1>Your Shopping Cart</h1>
		<?php echo writeShoppingCart(); ?>
	</div>
	
	<br/><font size="5em">Books Available</font>
	<?php
	$sql = 'SELECT * FROM books ORDER BY id';
	$result = $db->query($sql);
	$output[] = '<table><tr>';
	while ($row = $result->fetch()) {
		$output[] = 	'<td style="padding:12px;"><b>'.$row['title'].'</b><br/> by '.$row['author'].'<br/><br/>Rp '.$row['price'].'</td>';
		$output[] = 	'<td style="padding:0 12px;"><a href="cart.php?action=add&id='.$row['id'].'">Add to cart&nbsp;&nbsp;&nbsp;&nbsp;</a></td>';
		$output[] = '</tr>';
	}
	$output[] = '</tr></table>';
	echo join('',$output);
	?>
</div>
</body>
</html>