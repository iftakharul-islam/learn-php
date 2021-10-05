<?php
$filename =  getcwd() . "/File/test6.txt";
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
/*
$fp = fopen($filename, 'w');
foreach ($students as $student) {
    $data = sprintf("%s,%s,%s,%s,%s\n",
        $student['fname'],
        $student['lname'],
        $student['age'],
        $student['class'],
        $student['roll']
    );
    fwrite($fp, $data);
}
fclose($fp);
*/


// $fp = fopen($filename, 'w');
// foreach ($students as $student) {
//     fputcsv($fp, $student);
// }
// fclose($fp);

/*
$fp = fopen($filename, 'r');

while ($data = fgets($fp)) {
    $student = explode(",", $data);
    printf(
        "Name = %s %s\nAge = %s\nClass = %s\nRoll = %s\n\n",
        $student[0],
        $student[1],
        $student[2],
        $student[3],
        $student[4]
    );
}
fclose($fp);

*/
/*
$fp = fopen($filename, 'r');

while ($student = fgetcsv($fp)) {
    printf(
        "Name = %s %s\nAge = %s\nClass = %s\nRoll = %s\n\n",
        $student[0],
        $student[1],
        $student[2],
        $student[3],
        $student[4]
    );
}
fclose($fp);
*/

// $newStudent = 
//     array(
//         'fname' => "Kopil",
//         'lname' => "Uddin",
//         'age' => 445,
//         'class' => 144,
//         'roll' => 788778
// );

// $fp = fopen($filename,'a');
// fputcsv($fp,$newStudent);
// fclose($fp);
$data = file($filename);
// print_r($data);
// unset($data[1]);
// print_r($data);

$fp= fopen($filename, "w");
foreach($data as $line){
 
    fwrite($fp, $line);
}
fclose($fp);