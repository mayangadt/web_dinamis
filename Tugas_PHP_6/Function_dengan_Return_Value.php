<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fungsi dengan Return Value</title>
</head>
<body>
<?php
    //Membuat fungsi yang Mengembalikan Nilai
    function hitungumur($tgl_lahir){
        $umur = date('Y')-$tgl_lahir;
        return $umur;
    }

    //Memanggil Fungsi dengan Return
    echo "Aku sekarang berumur ".hitungumur(2002). " tahun";
?>
</body>
</html>