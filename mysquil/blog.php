<?php
$servername="localhost";
$username="null";
$password="null";
$dbname="texas_college";
$conn=mysqli_connect($servername,$username,$password,$dbname);
if(!conn){
	die("connection failed:". mysqli_connect_error());
}



?>