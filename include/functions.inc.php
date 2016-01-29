<?php
session_start();
function loggedin()
{
	if(isset($_SESSION['id']) && !empty($_SESSION['id'])) { return true; }
	else { return false; }
}

if(loggedin())
{
	$id = $_SESSION['id'];
	$user_query = mysql_query("SELECT username, user_level FROM users WHERE id='$id'");
	$run_user = mysql_fetch_array($user_query);
	$username = $run_user['username'];
	$user_level = $run_user['user_level'];
	$query_level = mysql_query("SELECT name FROM user_level WHERE id='$user_level'");
	$run_level = mysql_fetch_array($query_level);
	$level_name = $run_level['name'];
}

function writeShoppingCart()
{
	//$cart = $_SESSION['cart'];
	$cart = isset($_SESSION['cart'])?$_SESSION['cart']:false;
	if (!$cart) { return '<p>No items in your shopping cart</p>'; }
	else
	{
		// Parse the cart session variable
		$items = explode(',',$cart);
		$s = (count($items) > 1) ? 's':'';
		return '<p><a href="cart.php">'.count($items).' item'.$s.' in your shopping cart</a></p>';
	}
}

function writeMiniCart()
{
	//$cart = $_SESSION['cart'];
	$cart = isset($_SESSION['cart'])?$_SESSION['cart']:false;
	if (!$cart) { return '0'; }
	else
	{
		// Parse the cart session variable
		$items = explode(',',$cart);
		$s = (count($items) > 1) ? 's':'';
		return '<a href="cart.php">'.count($items).'</a>';
	}
}

function showCart()
{
	global $db;
	$cart = $_SESSION['cart'];
	if ($cart)
	{
		$items = explode(',',$cart);
		$contents = array();
		foreach ($items as $item) { $contents[$item] = (isset($contents[$item])) ? $contents[$item] + 1 : 1; }
		$output[] = '<form action="cart.php?action=update" method="post" id="cart">';
		$output[] = '<table style="border: 1px solid white;">';
		foreach ($contents as $id=>$qty)
		{
			$sql = 'SELECT * FROM books WHERE id = '.$id;
			$result = $db->query($sql);
			$row = $result->fetch();
			extract($row);
			$output[] = '<tr>';
			$output[] = '<td style="width:40%"><b>'.$title.'</b><br/>by '.$author.'<br/><br/>Rp '.$price.' per 1</td>';
			$output[] = '<td style="width:15%">
							<center>
								Rp '.($price * $qty).'
								<br/>QTY: <input type="text" name="qty'.$id.'" value="'.$qty.'" size="3" maxlength="3" style="width:30px;"/><br/><br/>
							</center>
							<a href="cart.php?action=delete&id='.$id.'" class="r">Remove</a></td>
						 </td>';
			$total = NULL;
			$total += $price * $qty;
			$output[] = '</tr>';
		}
		$output[] = '</table>';
		$output[] = '<p>Grand total: <strong>Rp '.$total.'</strong></p>';
		
		$output[] = '<div class="wrapper" style="margin-left:240px;">
							<section><button name="submit" style="width:225px" class="progress-button" data-style="shrink" data-horizontal>Update</button></section>
							<section><button name="submit" style="width:225px" class="progress-button" data-style="shrink" data-horizontal>Purchase</button></section>
						 </div>';
		$output[] = '<ta</form>';
	}
	else { $output[] = '<p>You shopping cart is empty.</p>'; }
	return join('',$output);
}
?>
