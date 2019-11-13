<?php

for($i=0;$i<=6;$i++)
{
for($k=6;$k>=$i;$k--)
{
echo "  ";
}
for($j=1;$j<=$i;$j++)
{
echo "*  ";
}
echo "<br>";
}
for($i=5;$i>=1;$i--)
{
for($k=6;$k>=$i;$k--)
{
echo "  ";
}
for($j=1;$j<=$i;$j++)
{
echo "*  ";
}
echo "<br>";
}