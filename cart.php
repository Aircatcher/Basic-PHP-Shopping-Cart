<?php
// Include MySQL class
require_once('include/mysql.class.php');
// Include database connection
require_once('include/global.inc.php');
// Include functions
require_once('include/functions.inc.php');

// Process actions
$cart = $_SESSION['cart'];
//$_SESSION['cart'] = 'cart';
$action = $_GET['action'];
//$_SESSION['action'] = 'action';

switch ($action) {
	case 'add':
		if ($cart) {
			$cart .= ','.$_GET['id'];
		} else {
			$cart = $_GET['id'];
		}
		//if ($cart) {
		//	$cart .= ','.$_GET['id'];
		//	$image=$_FILES['image']['name'];
		//	$image_upload=$rand."_".$image;
		//	$image_size=$_FILES['image']['size']/1024;
		//	$image_type=$_FILES['image']['type'];
		//	$image_tmp=$_FILES['image']['tmp_name'];
		//	if( ($image_type =='image/jpeg') || ($image_type=='image/gif') )
		//	{ /* no error */ }
		//	else{ echo "Only Jpeg and Gif Images allowed"; }
			
		//	if($image_size >700){
		//		$error[]="Allowed below 700 KB";
		//	}
	//	} else {
	//		$cart = $_GET['id'];
	//	}
		break;
	case 'delete':
		if ($cart) {
			$items = explode(',',$cart);
			$newcart = '';
			foreach ($items as $item) {
				if ($_GET['id'] != $item) {
					if ($newcart != '') {
						$newcart .= ','.$item;
					} else {
						$newcart = $item;
					}
				}
			}
			$cart = $newcart;
		}
		break;
	case 'update':
	if ($cart) {
		$newcart = '';
		foreach ($_POST as $key=>$value) {
			if (stristr($key,'qty')) {
				$id = str_replace('qty','',$key);
				$items = ($newcart != '') ? explode(',',$newcart) : explode(',',$cart);
				$newcart = '';
				foreach ($items as $item) {
					if ($id != $item) {
						if ($newcart != '') {
							$newcart .= ','.$item;
						} else {
							$newcart = $item;
						}
					}
				}
				for ($i=1;$i<=$value;$i++) {
					if ($newcart != '') {
						$newcart .= ','.$id;
					} else {
						$newcart = $id;
					}
				}
			}
		}
	}
	$cart = $newcart;
	break;
}
$_SESSION['cart'] = $cart;
?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
	
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<title>Cart &#0183 Linkbook</title>
</head>

<body>
<?php include "webformat.php"; ?>
<div id="navbar-padding">
	<div id="shoppingcart" style="margin-top:38px;">
		<h1>Your Shopping Cart</h1>
		<?php echo writeShoppingCart();	?>
	</div>

	<div id="contents" style="margin-top:24px;">
		<h1>Please check quantities...</h1>
		<?php echo showCart(); ?>		
		<p><a href="index.php">Back to bookshop...</a></p>
	</div>
</div>
</body>
</html>