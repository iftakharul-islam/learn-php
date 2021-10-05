<?php

$foods = [
    'vegitables'=>explode(',','brinjal,brocoli,carrot'),
    'fruits'=>explode(',','orange,grape,apple'),
    'drinks'=> explode(',','water,milk')    
];
// print_r($foods);
array_push($foods['drinks'], 'lemon juice','pran juice');
// print_r($foods);
echo $foods['drinks'][0];