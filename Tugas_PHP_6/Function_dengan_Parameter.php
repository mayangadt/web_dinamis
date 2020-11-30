<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fungsi dengan Parameter</title>
</head>
<body>
<?php
    //Membuat Fungsi/Function dengan Parameter
    function perkenalan($salam, $nama){
        echo $salam." <br>";
        echo "Welcome to my youtube channel ".$nama."<br>";
        echo "Don't forget to like, comment, dan subscribes...<br>";
    }
    //Memanggil fungsi dengan parameter
    perkenalan("Hello Everyone", "Mayang NoorkA");
?>
</body>
</html>