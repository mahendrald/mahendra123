<?php
$a='my name is mahendra';
echo strlen($a);
 
 $a='hello         ';
 echo $a.'world'.'<br>';
 $trimmed=trim($a);
 echo ($trimmed);
 $b='world';
 $trimmed=trim($b);
 echo ($trimmed);
 $c='hello';
echo strpos($c,'ll').'<br>';

$a='this is my class';
print_r(str_replace(['is','my'], ['was',],$a));
print_r(str_replace(['is',], ['was',],$a));