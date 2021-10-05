<?php
$filename = getcwd()."/File/test2.txt";
// if (touch($filename)) {
//     echo $filename . ' modification time has been changed to present time';
// } else {
//     echo 'Sorry, could not change modification time of ' . $filename;
// }
$doc= <<<EOD
I'm are the best php
programmer in the room
EOD;
if(file_exists($filename)){
    $prev = file_get_contents($filename);
    if($prev){
    file_put_contents($filename,$prev."\n".$doc);
    echo "Yes prev data";
    }else{
    echo "No prev data";
    file_put_contents($filename,$doc);
    }
}
$i= 0;
$fp = fopen($filename,'r');
while($line = fgets($fp)){
    printf("[ %s ] %s",$i++,$line);
}
fclose($fp);