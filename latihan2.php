<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>latihan 2</title>
</head>
<body>
    <h2>Latihan 2</h2>
    <?php
    function hitung($a,$b,$c,$d)
    {
        $hasil = $a+$b+$c+$d;
        return $hasil;
    }
    echo("akurasi bilangan genap  0 s.d 6 adalah ".hitung(0,2,4,6));
    ?>
    
</body>
</html>