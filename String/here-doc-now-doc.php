<?php
$name = "Rakib";
$string = "My name is :: {$name}";
// echo $string;

$heredoc = <<<EOD
$string And My Work
work is important

EOD;
$nowdoc = <<<'ED'
$string And My Work
work is important
ED;
echo $nowdoc;