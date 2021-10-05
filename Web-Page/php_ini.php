<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP INI Setting</title>
</head>
<body>
    <?php
    // ini_set('upload_max_filesize',100);
    echo "<pre>";
    print_r( ini_get_all());
    // phpinfo();
    
    ?>
</body>
</html>