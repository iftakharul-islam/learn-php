<?php
$filename =  getcwd() . "/File/test7.txt";
/*
$students = array(
    array(
        'fname' => "Shahin",
        'lname' => "Ahmed",
        'age' => 21,
        'class' => 7,
        'roll' => 11,
    ),
    array(
        'fname' => "Korim",
        'lname' => "Miya",
        'age' => 20,
        'class' => 6,
        'roll' => 14,
    ),
    array(
        'fname' => "Hasin",
        'lname' => "Miya",
        'age' => 20,
        'class' => 9,
        'roll' => 44,
    ),
);
*/

// $fp = fopen($filename,"w");

// $data = serialize($students);
// file_put_contents($filename,$data, FILE_APPEND|LOCK_EX);


// $dataFile = file_get_contents($filename);
// $allStd = unserialize($dataFile);
// print_r($allStd);
// fclose($fp);

// $allStudents = serialize($students);
// file_put_contents($filename, $allStudents,FILE_APPEND|LOCK_EX);
$newstd = array(
    'fname' => "Rishab",
    'lname' => "Kail",
    'age' => 4444,
    'class' => 9,
    'roll' => 44,
);
$getAllStudents = file_get_contents($filename);
$stds = unserialize($getAllStudents);
// array_push($stds, $newstd);
print_r($stds);
// $ser = serialize($stds);
// print_r($ser);
// file_put_contents($filename,$ser);
// // $serializedStd = serialize($std);
// // file_put_contents($filename,$serializedStd);

