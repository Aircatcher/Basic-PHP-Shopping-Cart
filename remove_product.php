<?php
require('config.php');

if (isset($_POST['submit'])){
	
	$id = mysql_escape_string($_POST['id']);
	$product_name = mysql_escape_string($_POST['title']);
	$query = "DELETE FROM products WHERE id='$id' AND name = '$prodname'"; 
	mysql_query($query);
	echo"the product ".$prodname." have been removed<br><br>";
	echo"<a href='adminviewproducts.php'>Click here to go back</a>";
}
else
{
	$form = <<<EOT
	<form action="removeproducts.php" method="POST">
		Enter the book title to be deleted: <input type="text" name="name"><br>
		<input type="submit" name="submit" value="Remove Product">
	</form>
	<a href='adminviewproducts.php'>Click here to go back</a>
EOT;
	
	echo $form;
}
?>