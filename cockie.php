<?php
$value="hello world!";
setcookie("mycookie",$value,time()+10);
print_r($_COOKIE);

?>
