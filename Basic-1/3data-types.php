<?php 
declare(strict_types=1);
$str = 'This is String Type Data';
$num = 2022212;
$doubleOrFloat = 12.25;
$null = NULL;
$boolean = TRUE;
$array = [4,5,5];
$object = new PhpToken(5,"fasdfasdfadsfasd");
$resource = 'https://google.com/images/011diXBDJ/mountain.png';
// var_dump($resource);

echo PHP_EOL;
// echo strtoupper('This is an \'image\' link: '.$resource);
// $planet = 'earth';
// printf('We are living on %s', strtoupper($planet));
$break = PHP_EOL;

$fname = 'Iftakharul';
$lname = 'Islam';
$res = sprintf("My name is %s %s 
{$break}My Age is : %",
              $fname, $lname, 97);
echo $res;


// $total = 100;
// $qty = "20 pieces";
// $total = $total + $qty;

// echo $total; // 120