<?php
$string = "Hello-World";
$length = strlen($string)-1;

for ($i=0,$r=$length; $i <=$length ; $i++) { 
    echo $string[$r--];
}

