
<!DOCTYPE html>
<html lang="en">
<head>
	<link rel="stylesheet" href="style.css">
	
	<script>
		function invisible()
		{
			document.getElementById("invisible").style.display="none";
		}

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

		<h3>Which data do you want to update?</h3>

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



			if (mysqli_num_rows($result) > 0) {
			    while($row = mysqli_fetch_assoc($result)) {
			        echo "- UNIQUE ID:".$row['unique_id']."<br>"."- Title: " .$row["title"]."<br>". " - Content: " . $row["content"]."<br>"."- Author:".$row["author"]."<br>"."- Created date:".$row["created_date"]."<br>";
			        echo "<br>";
			        $count++;
			    }
			    	echo $count." record(s) found.";
			} else {
			    echo "0 results"."<br>";
			}

			mysqli_close($conn);
if ($count==0) {
			echo "No items are there to be updated."."<br>";
			goto GO;
}

?>
<br>

				<span>What do you want to update for the Unique ID? </span><br>
				<?php
					if (!isset($_GET['title_submit'])) {
					
				?> 
				<a href="#" onclick="display_title()">Title</a>
				<a href="#" onclick="display_content()">Content</a>
				<a href="#" onclick="display_author()">Author</a>
				<a href="#" onclick="display_date()">Created Date</a>

<?php
			}
?>
				<div id="title" style="display: none;">
					<form action="" method="GET">
					<p>Enter the UNIQUE ID to update the data </p>
					Unique ID: <input type="number" size="5" placeholder="Unique ID" name="unique_id" min="1" max="<?php echo $count;?>" required><br>
					Title:<input type="text" name="title" placeholder="Title" required><br>
					<input type="submit" name="title_submit" onclick="invisible();">
					</form>

				</div>

<?php
					if (isset($_GET['title_submit'])) 
					{
						$servername = "localhost";
						$username = "root";
						$password = NULL;
						$dbname = "BLOG";
						$title=$_GET['title'];
						$id=$_GET['unique_id'];
			
						// Create connection
						$conn = mysqli_connect($servername, $username, $password, $dbname);
						// Check connection
						if (!$conn) 
						{
						    die("Connection failed: " . mysqli_connect_error());
						}

						$sql = "UPDATE POST SET title='$title' WHERE unique_id='$id'";

						if (mysqli_query($conn, $sql)) {
						    echo "Record updated successfully";
						} else {
						    echo "Error updating record: " . mysqli_error($conn);
						}

						mysqli_close($conn);
						header("Refresh:5");


					}
?>

				<div id="content" style="display: none">
					<form action="" method="GET">
					<p>Enter the UNIQUE ID to update the data </p>
					Unique ID: <input type="number" size="5" placeholder="Unique ID" name="unique_id" min="1" max="<?php echo $count;?>"required><br>
					Content: <br><textarea name="content" placeholder="Content"  cols="30" rows="10" required></textarea><br>
					<input type="submit" name="content_submit">
					</form>
				</div>
<?php
					if (isset($_GET['content_submit'])) 
					{

						$servername = "localhost";
						$username = "root";
						$password = NULL;
						$dbname = "BLOG";
						$id=$_GET['unique_id'];
						$content=$_GET['content'];


						// Create connection
						$conn = mysqli_connect($servername, $username, $password, $dbname);
						// Check connection
						if (!$conn) 
						{
						    die("Connection failed: " . mysqli_connect_error());
						}

						$sql = "UPDATE POST SET content='$content' WHERE unique_id='$id'";

						if (mysqli_query($conn, $sql)) {
						    echo "Record updated successfully";
						} else {
						    echo "Error updating record: " . mysqli_error($conn);
						}

						mysqli_close($conn);
						header("Refresh:5");

					}
?>



				<div id="author" style="display: none">
					<form action="" method="GET">
					<p>Enter the UNIQUE ID to update the data </p>
					Unique ID: <input type="number" size="5" placeholder="Unique ID" name="unique_id" min="1" max="<?php echo $count;?>" required><br>
					Author:<input type="text" name="author" placeholder="Author" required>
					<input type="submit" name="author_submit">
					</form>
				</div>
<?php
					if (isset($_GET['author_submit'])) 
					{

						$servername = "localhost";
						$username = "root";
						$password = NULL;
						$dbname = "BLOG";
						$id=$_GET['unique_id'];
						$author=$_GET['author'];


						// Create connection
						$conn = mysqli_connect($servername, $username, $password, $dbname);
						// Check connection
						if (!$conn) 
						{
						    die("Connection failed: " . mysqli_connect_error());
						}

						$sql = "UPDATE POST SET author='$author' WHERE unique_id='$id'";

						if (mysqli_query($conn, $sql)) {
						    echo "Record updated successfully";
						} else {
						    echo "Error updating record: " . mysqli_error($conn);
						}

						mysqli_close($conn);
						header("Refresh:5");

					}
?>
				

				<div id="created_date" style="display: none">
					<form action="" method="GET">
					<p>Enter the UNIQUE ID to update the data </p>
					Unique ID: <input type="number" size="5" placeholder="Unique ID" name="unique_id" min="1" max="<?php echo $count;?>" required><br>
					Created date:<input type="date" name="created_date" placeholder="Created date" required>
					<input type="submit" name="date_submit">
					</form>
				</div>
<?php
					if (isset($_GET['date_submit'])) 
					{

						$servername = "localhost";
						$username = "root";
						$password = NULL;
						$dbname = "BLOG";;
						$id=$_GET['unique_id'];
						$c_date=$_GET['created_date'];


						// Create connection
						$conn = mysqli_connect($servername, $username, $password, $dbname);
						// Check connection
						if (!$conn) 
						{
						    die("Connection failed: " . mysqli_connect_error());
						}

						$sql = "UPDATE POST SET created_date='$c_date' WHERE unique_id='$id'";

						if (mysqli_query($conn, $sql)) {
						    echo "Record updated successfully";
						} else {
						    echo "Error updating record: " . mysqli_error($conn);
						}

						mysqli_close($conn);
						header("Refresh:5");
					}

?>
<?php
GO:
?>
