
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" href="style.css">
	
	<title>Database Creation</title>
</head>
<body>
	<form action="" method="GET">
		<h2>Name the database you want to create:</h2>
		Database Name:<input type="text" name="dbname" placeholder="Database Name">
		<input type="submit" name="submit_database" value="Create">
	</form>
	<h3>What would you like to do?</h3>
		<ol>
				<li><a href="table_creation.php">Create a table in a database</a></li>
				<li><a href="form_for_db.php">Insert into Database</a></li>
				<li><a href="database_select.php">Read the database</a></li>
				<li><a href="database_update.php">Update the database</a></li>
				<li><a href="database_delete">Delete a database</a></li>	
	</ol>
</body>
</html>
<?php
if (isset($_GET['submit_database'])) 
{
	$servername = "localhost";
	$username = "root";
	$password = NULL;
	$dbname= $_GET['dbname'];
	// Create connection
	$conn = mysqli_connect($servername, $username, $password);
	// Check connection
	if (!$conn) {
	    die("Connection failed: " . mysqli_connect_error());
	}

	// Create database
	$sql = "CREATE DATABASE $dbname";
	if (mysqli_query($conn, $sql)) {
	    echo "Database created successfully";
	} else {
	    echo "Error creating database: " . mysqli_error($conn);
	}

	mysqli_close($conn);	
	}

?>