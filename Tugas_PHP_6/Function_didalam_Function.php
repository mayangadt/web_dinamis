<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fungsi di dalam Fungsi</title>
</head>
<body>
<?php
    //Membuat fungsi yang Mengembalikan Nilai
    function hitungumur($tgl_lahir){
        $umur = date('Y')-$tgl_lahir;
        return $umur;
    }
    function perkenalan($channel, $salam="Hello Everyone") {
        echo $salam." <br>";
        echo "Welcome to my youtube channel ".$channel."<br>";
        //Memanggil fungsi lain
        echo "Now I'm " .hitungumur(2002). " years old<br>";
        echo "Greetings from me";
    }
    
    //Memanggil fungsi perkenalan
    perkenalan("Mayang NoorkA");
    
?>
</body>
</html>