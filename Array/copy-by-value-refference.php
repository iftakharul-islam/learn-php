<?php
{
$person = ['fname'=>'Hello', 'lname'=> 'World'];
$newperson = $person;
//  Copy By Value 
//  Deep Copy 
$newperson['lname']= 'Marse';
print_r($person);
print_r($newperson);
}



$oldPerson = &$person;
$oldPerson['lname'] = 'Monir';
// print_r($oldPerson);
// print_r($person);


// (function(){
//     echo "Hello World \n";
//     (function (){
//         echo "Hello Return";
//     })();
// })();

function call($arr, $cb){
    $length = count($arr);
   for($i=0;$i<$length;$i++){
    $cb($arr[$i],$i,$arr);
   }
}
