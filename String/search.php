<?php 
$string = 'Quick brown For fox jumps over the lazy dog';
$offset =  strripos($string,'dog');
if($offset !== false){
    echo "String was found $string[$offset]";
}else{
    echo "String not found";
}
?>