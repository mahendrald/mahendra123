
<!DOCTYPE html>
<html lang="en">
<head>
	<link rel="stylesheet" href="style.css">

	<script>
	function display_text()
	{
	
	document.getElementById("text").style.display ="block";
	}

	function display_title()
	{
	
	document.getElementById("title").style.display ="block";
	}

	function display_content()
	{
	
	document.getElementById("content").style.display ="block";
	}
	function display_author()
	{
	
	document.getElementById("author").style.display ="block";
	}
	
	function display_date()
	{
	
	document.getElementById("created_date").style.display ="block";
	}
</script> 
	<meta charset="UTF-8">
	<title>Update Database Page 2</title>
</head>
<body>

		<h3>Which data do you want to delete?</h3>

<?php

			$servername = "localhost";
			$username = "root";
			$password = NULL;
			$dbname = "BLOG";
			$count=0;

			// Create connection
			$conn = mysqli_connect($servername, $username, $password, $dbname);
			// Check connection
			if (!$conn) {
			    die("Connection failed: " . mysqli_connect_error());
			}

			// sql to select
			$sql = "SELECT * FROM POST;";
			$result = mysqli_query($conn, $sql);

//For finding out maximum id 
			$sql1="SELECT MAX(unique_id) FROM POST;";
			$result1= mysqli_query($conn, $sql);



			if (mysqli_num_rows($result) > 0) 
			{
			    while($row = mysqli_fetch_assoc($result)) 
			    {
			        echo "- UNIQUE ID:".$row['unique_id']."<br>"."- Title: " .$row["title"]."<br>". " - Content: " . $row["content"]."<br>"."- Author:".$row["author"]."<br>"."- Created date:".$row["created_date"]."<br>";
			        echo "<br>";
			        $count++;
			    }
			    	echo $count." record(s) found.";
//Finding maximum ID
				while($row = mysqli_fetch_assoc($result1)) 
			    {
			   		$max= $row['unique_id'];
			    }

			} else {
			    echo "0 results";
			}

			mysqli_close($conn);


?>
<br>

				<span>What do you want to delete for the Unique ID? </span><br>
				<div >
					<form action="" method="GET">
					<p>Enter the UNIQUE ID to delete the data </p>
					Unique ID: <input type="number" size="5" placeholder="Unique ID" name="unique_id" min="1" max="<?php echo $max; ?>"><br>
					<input type="submit" name="title_submit" value="Delete">
					
					<input type="submit" name="delete_all" value="Delete All">
					</form>

				</div>

<?php
					if (isset($_GET['title_submit'])) 
					{
						$servername = "localhost";
						$username = "root";
						$password = NULL;
						$dbname = "BLOG";
						$id=$_GET['unique_id'];
			
						// Create connection
						$conn = mysqli_connect($servername, $username, $password, $dbname);
						// Check connection
						if (!$conn) 
						{
						    die("Connection failed: " . mysqli_connect_error());
						}

						$sql = "DELETE FROM POST WHERE unique_id='$id'";

						if (mysqli_query($conn, $sql)) {
						    echo "Record deleted successfully";
						} else {
						    echo "Error deleting record: " . mysqli_error($conn);
						}

						mysqli_close($conn);
						header("Refresh:5");


					}


					if (isset($_GET['delete_all'])) 
					{
						$servername = "localhost";
						$username = "root";
						$password = NULL;
						$dbname = "BLOG";
						$id=$_GET['unique_id'];
			
						// Create connection
						$conn = mysqli_connect($servername, $username, $password, $dbname);
						// Check connection
						if (!$conn) 
						{
						    die("Connection failed: " . mysqli_connect_error());
						}

						$sql = "DELETE * FROM POST";

						if (mysqli_query($conn, $sql)) {
						    echo "All Records deleted successfully";
						} else {
						    echo "Error deleting records: " . mysqli_error($conn);
						}

						mysqli_close($conn);
						header("Refresh:5");


					}
?>
		
	<h3>What would you like to do?</h3>
	<a href="form_for_db.php">Insert</a>
	<a href="database_select.php">Read</a>
	<a href="database_update.php">Update</a>		