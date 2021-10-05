<!DOCTYPE HTML>
<html>
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title>Get image width using File API</title>
  </head>

  <body>
    <input type='file' onchange="readURL(this);" />
    <img src="" id="myImageID" alt="">
    <script>

      function readURL(input) {
        if (input.files && input.files[0]) {
 var img = document.getElementById("myImageID"); 
var imgWidth = img.clientWidth;
var imgHeight = img.clientHeight;
          var reader = new FileReader();
          reader.onload = function (e) {
            var img = new Image;
            img.onload = function() {
              console.log("The width of the image is " + img.width +" "+ img.height+ "px.");
            };
            img.src = reader.result;
          };
          reader.readAsDataURL(input.files[0]);
        }
      }

    </script>
  </body>
</html>