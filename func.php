<?php
echo'validate number';echo'<br>';
$string='9812356789';
echo'string:'.$string;echo'<br>';
if(preg_match('/^9([0-9]{9})$/', $string))
{
	echo"matched";
}
else
{
	echo"not matched";
}

echo'validate email id:';echo'<br>';
$string='mahendrald002@gmail.com';
echo'string:'.$string;echo'<br>';
if(preg_match('/^([a-zA-Z0-9], $string))