<?php

$filename = "http://localhost/jsonfile.txt";

$students = array(
    array(
        'fname' => "Iftakharul",
        'lname' => "Islam",
        'age' => 21,
        'roll' => 20,
        'class' => 977637
    ),
    array(
        'fname' => "Abdus",
        'lname' => "Samad",
        'age' => 20,
        'roll' => 977635,
        'class' => 12
    ),
    array(
        'fname' => "Sourab",
        'lname' => "Hossain",
        'age' => 21,
        'roll' => 977646,
        'class' => 12
    ),
    array(
        'fname' => "Ashikur",
        'lname' => "Rahman",
        'age' => 22,
        'roll' => 977644,
        'class' => 12
    ),
    array(
        'fname' => "Azhar",
        'lname' => "Udiin",
        'age' => 21,
        'roll' => 977642,
        'class' => 12
    )
);


  
$context = stream_context_create($opts);

$jsonStudent = json_encode($students);
print_r($jsonStudent);

if (!file_exists($filename)) {
    $fp = fopen($filename,'w',false,$context);
    file_put_contents($filename, $jsonStudent, FILE_APPEND | LOCK_EX,$context);
    fclose($fp);
}
if (file_exists($filename)) {
    $fileData = file_get_contents($filename);
    print_r($fileData);
    $decodedData = json_decode($fileData, true);
    print_r($decodedData);
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <script src="jsonfile.txt"></script>
    <script>
        //   data.forEach((value,index, array)=>{
        //       document.write(value['fname']);
        //       document.write(value['lname']);
        //       document.write(value['age']);
        //       document.write(value['roll']);
        //       document.write(value['class']);
        //       document.write(`<br>`);

        //   })
    </script>
</body>

</html>