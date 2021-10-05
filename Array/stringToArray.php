<?php


$vergitables = 'Carrot, Tomato,lettos Bringales, Potato, Onion,Garlic';

$vegArray = preg_split('/(, |,| )/', $vergitables);
print_r($vegArray);
// foreach ($vegArray as $key => $value) {
//     echo $value."\n";
// }
// echo count($vegArray)."\n";

// $joinedVeg = join(', ', $vegArray);
// echo $joinedVeg;