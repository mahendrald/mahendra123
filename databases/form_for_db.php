<?php

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Form and Database</title>
</head>
<body>
	<form action="database_insert.php" method="GET" >
		Unique ID: <input type="number" size="5" placeholder="Unique ID" name="unique_id" ><br>
		Title:<input type="text" name="title" placeholder="Title" required><br>
		Content: <br><textarea name="content" placeholder="Content"  cols="30" rows="10" required></textarea><br>
		Author:<input type="text" name="author" placeholder="Author" required><br>
		Created date:<input type="date" name="created_date" placeholder="Created date" required><br>
		<input type="submit" name="submit">
	</form>
	<h3>What would you like to do?</h3>
		<ol>
				<li><a href="database_creation.php">Create Database</a></li>
				<li><a href="table_creation.php">Create a table in a database</a></li>
				<li><a href="database_select.php">Read the database</a></li>
				<li><a href="database_update.php">Update the database</a></li>
				<li><a href="database_delete">Delete a database</a></li>	
	</ol>
</body>
</html>

