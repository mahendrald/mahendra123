

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Database Table Creation</title>
</head>
<body>
	<form action="" method="GET">
		<h3>Enter the database in which you want to create the table</h3>
		Enter Database name:<input type="text" name="dbname" placeholder="Existing Database Name">
		<h3>Enter the table name:</h3>
		Enter Table Name: <input type="text" name="tablename" placeholder="New Table Name ">
		<input type="submit" name="submit_table">
	</form>

	<h3>What would you like to do?</h3>
		<ol>
				<li><a href="database_creation.php">Create Database</a></li>
				<li><a href="form_for_db.php">Insert into Database</a></li>
				<li><a href="database_select.php">Read the database</a></li>
				<li><a href="database_update.php">Update the database</a></li>
				<li><a href="database_delete">Delete a database</a></li>	
	</ol>
</body>
</html>
<?php
if (isset($_GET['submit_table'])) 
{
		$servername = "localhost";
		$username = "root";
		$password = NUll;
		$dbname = $_GET['dbname'];
		$table_name=$_GET['tablename'];
		// Create connection
		$conn = mysqli_connect($servername, $username, $password, $dbname);
		// Check connection
		if (!$conn) {
		    die("Connection failed: " . mysqli_connect_error());
		}else{
		  echo "connected";
		}

		// sql to create table
		$sql = "CREATE TABLE $table_name(
		    title VARCHAR(25) NOT NULL,
		    content VARCHAR(100) NOT NULL,
		    author VARCHAR(25) NOT NULL,
		    created_date DATE NOT NULL
		);";

		if (mysqli_query($conn, $sql)) {
		    echo "Table created successfully";
		} else {
		    echo "Error creating table: " . mysqli_error($conn);
		}

		mysqli_close($conn);	
}
?>