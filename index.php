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
	<?php include "webformat.php";?>
</head>

<body>
<div id="navbar-padding">
	<div id="shoppingcart" style="margin-top:38px;">
		<h1>Your Shopping Cart</h1>
		<?php echo writeShoppingCart(); ?>
	</div>
	
	<!------------------------------- BOOK TABLE ------------------------------>
	<br/><font size="5em">Books Available</font>
	<?php
	$sql = 'SELECT * FROM books ORDER BY id';
	$result = $db->query($sql);
	$output[] = '<table><tr>';
	$id = 1;
	while ($row = $result->fetch()) {
		$output[] = '<td style="padding=0 0 0 0;">
							<a href="product.php?id='.$row['id'].'"><img src="include/img/products/'.$row['id'].'.jpg" width="200" height="225" alt="'.$row['title'].'"/></a>
						 </td>';
		$output[] = '<td style="padding:5px;">
								Category: '.$row['category'].'
								<b><a style="padding: 8px 0 8px 0;" href="product.php?id='.$row['id'].'">'.$row['title'].'</a></b>
								by '.$row['author'].'<br/>
								Rp '.$row['price'].'<br/><br/>
								<a href="include/img/products/'.$row['id'].'.jpg">View Full Size Image</a>
								<a href="cart.php?action=add&id='.$row['id'].'">Add to cart</a>
							 </td>';
		$output[] = '</tr>';
	}
	$output[] = '</tr></table>';
	$output[] = '<br/><br/><br/>';
	echo join('',$output);
	?>
</div>
</body>
</html>