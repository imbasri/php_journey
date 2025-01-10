<!-- gettype() mengembalikan tipe data -->

<!-- var_dum() mengembalikan data dalam bentuk array -->

<!-- is_*()  * typedata mengembaliknan type tertentu -->

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Type Data</title>
</head>

<body>
    <?php
    $salam = "hallo";
    $boolean = true;
    $num = 123;
    $float = 1.2;
    $arr=[1,'testing',true];
    $null = null;
    ?>

    <h1><?php echo $salam ?></h1>
    <p><?php echo gettype($salam) ?> gettype</p>
    <p><?php echo var_dump($salam) ?></p>
    <p><?php echo is_bool($boolean) ?> is boolean</p>
</body>

</html>