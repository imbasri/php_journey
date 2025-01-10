<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manipulasi String</title>
</head>

<body>
    <?php
    // string concatenation
    $firstName = "imbasri";
    $lastName = "dev";
    // cara 1 .
    $fullName = $firstName . " " . $lastName;
    // cara 2 interpolasi dengan tanda kutip ganda
    $namaPanjang = "$firstName $lastName";

    // pencarian string
    $kalimat = "bahasa PHP adalah bahasa pemograman server side (PHP) yang sangat populer dan sangat mudah untuk dipelajari";
    $posisiAwal = strpos($kalimat, "PHP");
    $posisiAkhir = strrpos($kalimat, "PHP");
    ?>

    <!-- fungsi lain  -->
    <?php
    $newKalimat = str_replace("PHP", "JavaScript", $kalimat)
    ?>
    <h1><?= $fullName ?></h1>
    <br>
    <h2><?= $namaPanjang ?></h2>
    <p>posisi</p>
    <p><?= "awal strpos: ", $posisiAwal ?></p>
    <p><?= "akhir strpos: ", $posisiAkhir ?></p>
    <br>
    <p>new replace</p>
    <p><?= $newKalimat ?></p>
    <p>panjang kalimat : <?= strlen($kalimat) ?></p>
    <p>ini adalah uppercase php = <?= strtoupper($kalimat) ?></p>
    <p>ini adalah lowecase php = <?= strtolower($kalimat) ?></p>

    <p>ambil beberapa kata dari kalimat : <?= substr($kalimat, 0, 10) ?></p>
</body>

</html>