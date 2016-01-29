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
	<title>Add a Product &#0183 Linkbook</title>
	<?php include "webformat.php"; ?>
</head>

<body>
	<div id="navbar-padding" style="margin-top:50px;">
		<h1>Add a Product</h1>
		<form method="POST" style="padding-top:5px; padding-left:24px;">
			<?php
			if(isset($_POST['submit']))
			{
				$bookID = (isset($_POST['id']) ? $_POST['id'] : null);
				$product_name = $_POST['title'];
				$category = $_POST['category'];
				$author = $_POST['author'];
				$description = $_POST['description'];
				$price = $_POST['price'];
				$query = NULL;
				if(empty($product_name)) { $productname_empty = "Book title cannot be empty!"; }
				else if(empty($category)) { $category_empty = "Category cannot be empty!"; }
				else if(empty($author)) { $author_empty = "Author cannot be empty!"; }
				else if(empty($description)) { $description_empty = "Description cannot be empty!"; }
				else if(empty($price)) { $price_empty = "Price cannot be empty!"; }
				else $query = mysql_query("SELECT title FROM books WHERE id='$bookID'");
				
				if (mysql_num_rows($query) != 0)
				{
					echo "Book already exists";
				}
				else
				{
						mysql_query("INSERT INTO books VALUES('', '$product_name', '$category', '$author', '$description', '$price')");
						mysql_query("ALTER TABLE books AUTO_INCREMENT = 1");
						echo "<p>Book succesfully added!</p>";
				}
			}
			?>
			<br/>
			<div style="position: relative;">
				<span>
					<input class="gate" id="title" type="text" name="title" placeholder="Enter book title..." />
					<label for="title">Book Title</label>
				</span>
			</div>
			<br/>
			<div style="position: relative;">
				<span>
					<input class="gate" id="category" type="text" name="category" placeholder="Enter book category..." />
					<label for="password">Category</label>
				</span>
			</div>
			<br/>
			<div style="position: relative;">
				<span>
					<input class="gate" id="author" type="text" name="author" placeholder="Enter book author..." />
					<label for="password">Author</label>
				</span>
			</div>
			<br/>
			<div style="position: relative;">
				<span>
					<input class="gate" id="price" type="text" name="price" placeholder="Enter book price..." />
					<label for="password">Price</label>
				</span>
			</div>
			<br/>
			<div style="position: relative;">
				<span>
					<input class="gate" id="description" type="text" name="description" style="width: 800px;" placeholder="Enter book description..." />
					<label for="password">Description</label>
				</span>
			</div>
			<br/>
			<div class="wrapper" style="position: relative;">
				<section><button name="submit" style="width:215px" class="progress-button" data-style="filling" data-horizontal="">Add</button></section>
				<br/>
				<section><button onclick="location.href='index.php';" style="background-color:#FF2A2A; width:215px" class="progress-button" data-style="shrink" data-horizontal>Cancel</button></section>
			</div>
		</form>
	</div>
</body>
</html>