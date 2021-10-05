<?php
$filename =  getcwd() . "/File/test5.txt";

$arr = array("Ifat");
foreach ($arr as $i =>  $name) {
    file_put_contents(
        $filename,
        $i++ . " $name\n",
        FILE_APPEND | LOCK_EX
    );
}

// flock($filename,LOCK_SH);