<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fungsi Rekursif</title>
</head>
<body>
<?php
    //membuat fungsi faktorial
    function faktorial($angka){
        if($angka < 2){
            return 1;
        } else{
            //memanggil dirinya sendiri
            return ($angka *faktorial($angka-1));
        }
    }

    //memanggil fungsi
    echo "faktorial 8 adalah " .faktorial(8);
?>
</body>
</html>