<?php
session_start();
if(array_key_exists('counter', $_SESSION)){
	$counter=$_SESSION['counter'];
	$counter++;
}
else
{
	$counter=1;
}
$_SESSION['counter']=$counter;
echo "you have visited page".$counter."times"
?>


