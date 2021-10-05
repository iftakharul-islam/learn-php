<?php
$filename =  getcwd()."/File/test.txt";
if(is_readable($filename)){

$fp = fopen($filename,'r');
// while($line = fgets($fp,5)){
//     echo $line;
// }
// echo PHP_EOL;
// fseek($fp,10);
// while($line = fgets($fp,5)){
//     echo $line."-";
// }
// echo PHP_EOL;
// fclose($fp);


$prev = file_get_contents($filename);

file_put_contents($filename,"$prev\nOsman\nMizan");
$data = file($filename);
print_r($data);
// echo   $data[2];
}