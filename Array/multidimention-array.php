<?php
$marks = [
    'ashik' => [
        'math' => 80, 'bangla' => 85, 'english' => 75
    ],
    'ifat' => [
        'math' => 80, 'bangla' => 85, 'english' => 75
    ],
    'azhar' => [
        'math' => 80, 'bangla' => 85, 'english' => 75
    ],
    'samad' => [
        'math' => 80, 'bangla' => 85, 'english' => 75
    ],
    'sourab' => [
        'math' => 80, 'bangla' => 85, 'english' => 75
    ],
    'tanvir' => [
        'math' => 80, 'bangla' => 85, 'english' => 75
    ],
];

function arr($array)
{

    foreach ($array as $key => $data) {

        echo "$key => \t \n  ";
       echo  is_array($data) == TRUE? '': $data;
        if (is_array($data)) {
            foreach ($data as $keys => $arr) {
                echo " [ $keys = $arr ] ";
            }
        }
        echo PHP_EOL;
    }
}
// arr($marks);


$arkeys = (array_keys($marks));
