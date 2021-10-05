<?php 
header('X-XSS-Protection:1');

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
</style>

<body>
    <div class="container mt-5">
        <div class="row">
            <div class="col column-60 column-offset-20">
                <h1>Our PHP Form </h1>
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Facere </p>

                <?php

                    $fname = '';
                    $lname = '';
                    $checkbox = '';
                    
                 if(isset($_REQUEST['fname']) && !empty($_REQUEST['fname'])):
                //  $fname =  htmlspecialchars($_REQUEST['fname']);
                 $fname =  filter_input(INPUT_POST,'fname',FILTER_SANITIZE_SPECIAL_CHARS);
                 endif; 
               
                 if(isset($_REQUEST['lname']) && !empty($_REQUEST['lname'])):
                 $lname =  htmlspecialchars($_REQUEST['lname']);
                 endif; 
                 
                 
                
                ?>
                <p> First Name : <?php echo $fname; ?> </p>
                <p> Last Name : <?php echo $lname; ?> </p>
                <p> Checkbox : <?php 
                if(isset($_REQUEST['checkbox']) && !empty($_REQUEST['checkbox'])){
                    $checkbox = 'checked';
                    echo $checkbox;
                }
                ?> </p>

            </div>
        </div>
        <div class="row">
            <div class="col column-6 column-offset-20">
                <form action="" method="post">
                    <label for="fname">First Name</label>
                    <input type="text" value="<?php echo $fname; ?>" name="fname">

                    <label for="lname">Last Name</label>
                    <input type="text" value="<?php echo $lname; ?>" name="lname">
                    <div> 
                    <input type="checkbox" <?php echo $checkbox; ?> name="checkbox" value="1" name="cbl">
                    <label for="cbl" class="label-inline">Some checkbox</label>
                    </div>
                    <input class="button-primary" type="submit" value="Send">
                </form>
            </div>
        </div>
    </div>
</body>

</html>
