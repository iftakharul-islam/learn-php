<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <div>
        <h2>Enter Url</h2>
        <div>
            <input type="url" name="" id="url">
            <input type="submit" value="Download" id="submit">
        </div>
    </div>




    <script>
        let url = document.getElementById('url').value;
        let submit = document.getElementById('submit');

        submit.addEventListener('click', download);

        function download( /*fileUrl, fileName*/ ) {
            if (url != '') {
                var a = document.createElement("a");
                a.href = url;
                a.setAttribute("download", url);
                a.click();
                alert('file Downloaded');
            } else {
                alert('Enter Url to Download');
            }
        }
        // download("https://codesource.io/wp-content/uploads/2020/08/codesource.png", "Codesource_Logo.png");
    </script>
</body>

</html>