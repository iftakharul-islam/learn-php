<?php

?>
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
        margin: 100px;
    }

    #file {
        border: 1px solid purple;
        padding: 5px 5px;
    }
</style>

<?php
$error = [];
if(isset($_FILES['photo']) && !empty($_FILES['photo']['name'])){

$extension = pathinfo($_FILES["photo"]["name"], PATHINFO_EXTENSION);
$validType = ['png','jpg','webp','jpeg'];
    if(in_array($extension, $validType)){
        if(!file_exists('files')){
            mkdir('files');
        }
        $isUploaded = move_uploaded_file($_FILES['photo']['tmp_name'],
        'files/'.time().".".$extension);
        if($isUploaded){
            $error['success'] = 'File Uploaded Successfully';
        }else{
            $error['upload_failed'] = "Failed to upload".$isUploaded;
        }
    }else{
        $error['extension'] = 'Invalid Extension';
    }
}else if(isset($_FILES['photo']) && empty($_FILES['photo']['name'])){
    $error['blank'] = 'File is Blank';
}

?>

<body>
    <div class="container mt-5">
        <div class="row">
            <div class="col column-60 column-offset-20">
                <h1>Our PHP Form </h1>
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Facere </p>

                <!-- <input type=file oninput="pic.src=window.URL.createObjectURL(this.files[0])">
<img id="pic" />     -->
            </div>
        </div>
        <div class="row">
            <div class="col column-6 column-offset-20">
                <form action="" enctype="multipart/form-data" method="post">
                    <?php
                    if(isset($error)){
                        echo isset($error['blank'])==1?$error['blank']:'';   
                        echo isset($error['success'])==1?$error['success']:'';   
                        echo isset($error['extension'])==1?$error['extension']:'';   
                        echo isset($error['upload_failed'])==1?$error['upload_failed']:'';   
                    }
                    ?>
                    <label for="file">File Upload </label>
                    <input type="file" id='file' multiple name="photo">
                    <input class="button-primary" id="sub" type="submit" value="Send">

                </form>
                <div id="fs"></div>
                <img src="" style="
                        display: block;
                        max-width:400px;
                        max-height:325px;
                        width: auto;
                        height: auto;
                        box-shadow: 5px 7px 14px #000000;
                        "
                        id="prev" alt="">
            </div>
        </div>
    </div>
    <iframe
    frameBorder="0"
    scrolling="auto"
    height="1000"
    width="100%"
    id="frame"
></iframe>
</body>
<script>
    let sub = document.getElementById('sub')
    let imgInp = document.getElementById('file')
    let prev = document.getElementById('prev')
    let frame = document.getElementById('frame')
    let fs = document.getElementById('fs')

    // sub.addEventListener('click', func);
    
        window.addEventListener('offline', 
        function(e) { 
            console.log('offline'); 
        });
        window.addEventListener('online', function(e) {
             console.log('online');
             });


    imgInp.onchange = evt => {
        [file] = imgInp.files;
        fs.innerHTML = file.name +" "+ formatSizeUnits(file.size);
        if(file.type === "application/png" || "application/jpg" || "application/jpeg" ){
                prev.src = URL.createObjectURL(file);
            }

        else if(file.type === "application/pdf" || "application/txt"){
            frame.src = URL.createObjectURL(file)
            }
    }

    function formatSizeUnits(bytes) {
        if (bytes >= 1073741824) {
            bytes = (bytes / 1073741824).toFixed(2) + " GB";
        } else if (bytes >= 1048576) {
            bytes = (bytes / 1048576).toFixed(2) + " MB";
        } else if (bytes >= 1024) {
            bytes = (bytes / 1024).toFixed(2) + " KB";
        } else if (bytes > 1) {
            bytes = bytes + " bytes";
        } else if (bytes == 1) {
            bytes = bytes + " byte";
        } else {
            bytes = "0 bytes";
        }
        return bytes;
    }
</script>

</html>
<!-- 
const [file, f2] = imgInp.files;
        if (file) {
            console.log(file, f2)
            fs.innerHTML =file.name +" "+ formatSizeUnits(file.size);

            if(file.type === "application/png" || "application/jpg" || "application/jpeg" ){
                prev.src = URL.createObjectURL(file);
            }
            if(file.type === "application/pdf" || "application/txt"){
            frame.src = URL.createObjectURL(file)
            }
        } -->


<!-- 

        if (isset($_FILES['photo'])) {
    $error = [];
    $validExtension = [
        'image/jpg' , 
        'image/png' , 
        'image/jpeg'
    ];
    if (in_array($_FILES['photo']['type'], $validExtension) ) {
        $extension =  pathinfo($_FILES["photo"]["name"], PATHINFO_EXTENSION);
        if (!file_exists('files')) {
            mkdir('files');
        }
        $movedFile = move_uploaded_file(
            $_FILES['photo']['tmp_name'],
            'files/' . time() . "." . $extension
        );
        if($movedFile){
            $error['file_uploaded'] = 'File Uploaded Succesfully';
        }
    }else{
        $error['type_error'] = "Not Valid File";
    }
}else if(isset($_FILES['photo']) && ('' == $_FILES['photo']['name'])){
    $error['blank_file'] = 'File is blank';
} -->
