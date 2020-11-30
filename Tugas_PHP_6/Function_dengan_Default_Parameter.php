<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fungsi dengan Default Parametere</title>
</head>
<body>
<?php
    //Membuat fungsi/Function dengan Parameter
    function perkenalan($salam, $nama){
        echo $salam." <br>";
        echo "Welcome to my youtube channel".$nama."<br>";
        echo "Don't forget to like, comment, dan subscribes...<br>";
        echo "<hr>";
    }
     //Memanggil fungsi dengan parameter
    perkenalan("Hello Everyone", "Mayang NoorkA");

    $salam = "Spread Love and Good Vibes";
    $nama = "It's Mayang NoorkA";
    perkenalan($salam, $nama);
?>
</body>
</html>