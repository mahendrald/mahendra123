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
    echo "0 results";
}

mysqli_close($conn);

?>
	<h3>What would you like to do?</h3>
	<a href="form_for_db.php">Insert</a>
	<a href="database_update.php">Update</a>
	<a href="database_delete.php">Delete</a>


