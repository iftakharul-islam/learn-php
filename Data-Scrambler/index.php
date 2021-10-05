<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Web Page</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,300italic,700,700italic">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/milligram/1.4.1/milligram.css">
</head>
<style>
    body {
        margin-top: 30px;
    }
    #data{
        width: 100%;
        height: 160px;
    }
    #result{
        width: 100%;
        height: 160px;
    }
   .hidden{
       display: none;
   }
</style>

<?php
include_once 'scramblerf.php';
$task = 'encode';

// $mainKey = 'abcdefghijklmnopqrstubwxyz1234567890';
$key = 'abcdefghijklmnopqrstubwxyz1234567890';

if(isset($_GET['task']) && $_GET['task']!=''){
    $task = $_GET['task'];
}

if('key'== $task){
    $spiltedkey = str_split($key);
    
    shuffle($spiltedkey);
    $key = join('',$spiltedkey);

}else if(isset($_POST['key']) && $_POST['key']!=''){
    $key = $_POST['key'];
}


$scrambledData = '';
if('encode' == $task){
    $data = $_POST['data']??'';
    if($data!=''){
        $scrambledData = srambleData($data,$key);
    }
}
if('decode' == $task){
    $data = $_POST['data']??'';
    if($data!=''){
        $scrambledData = decodeData($data,$key);
    }
}

?>
<body>
    <div class="container mt-5">
        <div class="row">
            <div class="col column-60 column-offset-20">
                <h2>Data Scrambler </h2>
                <p>Use This Application To Use This Data</p>
                <p>
                    <a href="/?task=encode">Encode</a> |
                    <a href="/?task=decode">Decode</a> |
                    <a href="/?task=key">Generate</a>
                </p>
            </div>
        </div>
        <div class="row">
            <div class="col column-8 column-offset-20">
                <form action="index.php<?php if($task == 'decode'){
                    echo '?task=decode';
                } ?>" method="post">
                    <label for="key">Key</label>
                    <input type="text" name="key" <?php  displayKey($key); ?> id="key">
                    <label for="data">Data</label>
                    <textarea name="data" id="data"><?php if(isset($_POST['data'])){echo ($_POST['data']);}?></textarea>
                    <label for="result">Result</label>
                    <textarea name="result" id="result"><?php echo $scrambledData; ?></textarea>
                    <input type="submit" value="Submit">
                </form>

</body>

</html>
