<?php
$fruitsArr = ['Orange', 'Grape','Banana','Mango','Lemon', 'Watermelon' ]; 
function displayOptions($options, $sValues){
    $selected = '';
    if(is_array($sValues)){ echo " This is an array "; }
    foreach($options as $option){  
        printf("<option value='%s' %s> %s </option>",
        strtolower($option), $selected , ucwords($option));
    }

}

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
                <p>
                <?php 
                $fruits = '';
                if(isset($_REQUEST['fruits'] )&& $_REQUEST['fruits']!==''){
                $fruits = filter_input(INPUT_POST,'fruits',FILTER_SANITIZE_STRING,FILTER_REQUIRE_ARRAY);
                // echo is_array($fruits)."<br>";
                echo  join('<br>', ($fruits));
                }
                ?>
                </p>
                <?php 
                
                
                ?>
            </div>
        </div>
        <div class="row">
            <div class="col column-60 column-offset-20">
                <form action="" method="post">
                   
                    <label for="select">Select Menu</label>
                    <div id="values"></div>
                    <select name="fruits[]" style="height: 150px;" size="4" tabindex="1" multiple id="">
                        <option value="" disabled=true > Select fruits </option>
                       <?php displayOptions($fruitsArr, $fruits); ?>
                    </select>
                    <input class="button-primary" type="submit" value="Send">
                </form>
            </div>
        </div>
    </div>
</body>
<script>

window.onmousedown = function (e) {
    
    var el = e.target;
    let values = document.getElementById('values');
    
    
    if (el.tagName.toLowerCase() == 'option' && el.parentNode.hasAttribute('multiple')) {
        e.preventDefault();
        let li = document.createElement('li');
        li.innerText = el.value;
        values.appendChild(li);
        console.log(li)
        // toggle selection
        if (el.hasAttribute('selected') ) el.removeAttribute('selected');
        else el.setAttribute('selected', '');

        // hack to correct buggy behavior
        var select = el.parentNode.cloneNode(true);
        el.parentNode.parentNode.replaceChild(select, el.parentNode);
        
        
      
    }
}
    
</script>
</html>