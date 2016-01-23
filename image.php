<td id="cell_1" width="100" height="225">
	<?php
		$bookID = $_SESSION['id'];
		$queryRole = "SELECT image FROM books WHERE id = '$bookID'";
		$stmt = $db->prepare($queryRole);
		$stmt->bindValue('id', $bookID);
		$stmt->execute();

		while ($row = $stmt->fetch(PDO::FETCH_ASSOC))
		{
			?>
			<img src='<?php echo $row['image']?>' width='85' height='85' />
			<?php
		}
	?>
</td>