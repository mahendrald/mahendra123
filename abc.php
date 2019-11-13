<?php
$a=15;
function abc(){
	GLOBAL $a;
	$a=$a+1;
	echo $a;
}
abc();