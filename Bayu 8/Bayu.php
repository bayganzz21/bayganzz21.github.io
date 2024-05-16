<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    $sudut = 50;
    echo $sudut < 90 ? "Besar $sudut derajat adalah sudut lancip.<br>" : "<br>";

    $sudut = 92;
    echo $sudut < 90 ? "Besar $sudut derajat adalah sudut lancip.<br>" : "Sudut $sudut derajat bukan sudut lancip.<br>";
    ?>
    
    <?php
    $sudut = 360;
    if ($sudut < 90) {
        echo "Besar $sudut derajat adalah sudut lancip.<br>";
    } elseif ($sudut < 180) {
        echo "Besar $sudut derajat adalah sudut tumpul.<br>";
    } elseif ($sudut == 180) {
        echo "Besar $sudut derajat adalah sudut lurus.<br>";
    } else {
        echo "Sudut $sudut derajat bukan sudut lancip, tumpul, maupun lurus.<br>";
    }
    ?>

    <?php
    switch ($sudut) {
        case ($sudut < 90):
            echo "Besar $sudut derajat adalah sudut lancip.<br>";
            break;
        case ($sudut < 180):
            echo "Besar $sudut derajat adalah sudut tumpul.<br>";
            break;
        case ($sudut == 180):
            echo "Besar $sudut derajat adalah sudut lurus.<br>";
            break;
        default:
            echo "Sudut $sudut derajat bukan sudut lancip, tumpul, maupun lurus.<br><br>";
    }
    ?>

    <?php
    for ($x = 1; $x <= 100; $x++) {
        echo "Angka $x <br>";
    }
    ?>

    <?php
    $i = 1;
    while ($i <= 6) {
        echo "<h$i>Ini adalah heading $i</h$i>";
        $i++;
    }
    ?>

    <?php
    $i = 1;
    do {
        echo "Ini pengulangan yang ke-$i<br>";
        $i++;
    } while ($i <= 6);
    ?>

    <?php
    $a = array("Surakarta", "Jakarta", "Yogyakarta");
    echo "<br>";
    foreach ($a as $data) {
        echo "$data <br>"; 
    }
    ?>

    <?php
    function report ($bulan) {
    if ($bulan < 4) {
          $status = 'Laporan belum tersedia';
    } else {
          $status = 'Laporan sudah tersedia';
    }
    return $status;
}
echo report(2); //Hasil : Laporan belum tersedia 
?>

<?php
function report ($bulan)  {
    if ($bulan < 5) {
        return 'Laporan belum tersedia'
    }
}

</body>

</html>