<?php
$arr=['abc','xyz','pqr'];
echo $arr[4];
if(array_key_exists(4,$arr))
{
echo $arr[4];
}
else{
	echo "index is not found";
}