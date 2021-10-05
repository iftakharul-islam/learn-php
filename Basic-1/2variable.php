<?php
define('PI', 3.14159);
$task = 'Read';
echo $task;
echo PHP_EOL;

// echo "Value of PI = ".PI;
// echo constant('PI');

$const = 'constant';
echo "Value of PI = {$const('PI')}";

// Cannot Define a Constant Value Again
// define('PI',1555); Error : Warning: Constant PI already defined 