<?php
if(array_key_exists('counter', $_COOKIE)){
	$counter=$_COOKIE['counter'];
	$counter++;
}
else
{
	$counter=1;
}
setcookie('counter',$counter);
echo "you have visited page".$counter."times"
?>
