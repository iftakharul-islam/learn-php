<?php
$fact = 10;
$res = 1;
$j=1;
for ($i=1; $i <= $fact; $i++) { 
   $res*= $i;
   echo $i." ".$res.PHP_EOL;
   $j++;
}
echo "Totoal Number of Operation ". $j;