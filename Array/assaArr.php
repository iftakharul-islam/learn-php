<?php
$student = array(
    'fname'=>'Jamal',
    'lname'=> 'Ahmed',
    'age'=> '15',
    'class'=>8,
    'section'=>'B',
);
// printf('%s %s',$student['fname'], $student['lname']);


// echo join(' ',$student);
$serialized =  serialize($student);

$newStudent = unserialize($serialized);
print_r($newStudent);

$jsonStudent = json_encode($newStudent);

echo $jsonStudent;

print_r(json_decode($jsonStudent, true));