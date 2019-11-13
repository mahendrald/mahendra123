<?php
	$id=$_GET['unique_id'];
	$title=$_GET['title'];
	$content=$_GET['content'];
	$author=$_GET['author'];
	$c_date=$_GET['created_date'];



// echo $title;
// echo $content;
// echo $author;
// echo $c_date;

// exit;

$servername = "localhost";
$username = "root";
$password = NULL;
$dbname = "BLOG";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// sql to insert
$sql = "INSERT INTO POST
	(unique_id,title,content,author,created_date)
	VALUES
	('$id','$title','$content','$author','$c_date')
;";

if (mysqli_query($conn, $sql)) {
	
	$last_id = mysqli_insert_id($conn);

    echo "New record inserted successfully".$last_id;
} else {
    echo "Error inserting: " . mysqli_error($conn);
}

mysqli_close($conn);
?>
	<h3>What would you like to do?</h3>
	<a href="form_for_db.php">Insert</a>
	<a href="database_select.php">Read</a>
	<a href="">Update</a>
	<a href="">Delete</a>