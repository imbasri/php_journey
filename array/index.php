<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Array</title>
</head>

<body>
    <?php
    $buah = ["apel", "mangga", "jeruk"];
    $minuman = array("teh", "kopi", "soda");

    // array multi dimensi
    $mhs = [
        ["nama" => "budi", "umur" => 20],
        ["nama" => "andi", "umur" => 22],
        ["nama" => "joni", "umur" => 21],
    ];

    // array associative
    $menu = [
        "buah" => ["apel", "mangga", "jeruk"],
        "minuman" => ["teh", "kopi", "soda"],
        "mhs" => [
            ["nama" => "budi", "umur" => 20],
            ["nama" => "andi", "umur" => 22],
            ["nama" => "joni", "umur" => 21],
        ]
    ]
    ?>
    <h1>Array</h1>
    <p>aneka buah</p>
    <ul>
        <?php
        foreach ($buah as $item) {
            echo "<li>$item</li>";
        }
        ?>
    </ul>
    <br>

    <p>minuman</p>
    <ul>
        <?php
        foreach ($minuman as $item) {
            echo "<li>$item</li>";
        }
        ?>
    </ul>

    <p>data mahasiswa</p>
    <ul>
        <?php
        foreach ($mhs as $item) {
            echo "<li>Nama : " . $item["nama"] . " Umur : " . $item["umur"] . "</li>";
        }
        ?>
    </ul>

    <p>data menu</p>

    <li>buah</li>
    <ul>
        <?php
        foreach ($menu["buah"] as $item) {
            echo "<li>$item</li>";
        }
        ?>
    </ul>
    <p>minuman</p>
    <ul>
        <?php
        foreach ($menu["minuman"] as $drink) {
            echo "<li>$drink</li>";
        }
        ?>
    </ul>
    <br>
    <p>data mahasiswa dalam array assosiative</p>
    <ul>
        <?php
        foreach ($menu["mhs"] as $student) {
            echo "<li>Nama : " . $student["nama"] . " Umur : " . $student["umur"] . "</li>";
        }
        ?>
    </ul>
</body>

</html>