<?php
if (isset($_POST['calculate'])) {
    # ambil data
    $num1 = htmlspecialchars($_POST['num1']);
    $num2 = htmlspecialchars($_POST['num2']);
    $operator = $_POST['operator'];

    if (is_numeric($num1) && is_numeric($num2)) {
        # hitung
        $result = 0;

        switch ($operator) {
            case 'add':
                $result = $num1 + $num2;
                break;
            case 'subtract':
                $result = $num1 - $num2;
                break;
            case 'multiply':
                $result = $num1 * $num2;
                break;
            case 'divide':
                if ($num1 == 0 || $num2 == 0) {
                    $result = "tidak dapat dibagi 0";
                } else {
                    $result = $num1 / $num2;
                }
                break;
            default:
                $result = "operator tidak valid";
                break;
        }
    } else {
        $result = "angka tidak valid";
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kalkulator</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="calculator-container">
        <h1>Kalkulator Sederhana</h1>
        <form action="index.php" method="post" class="calculator-form">
            <input type="text" name="num1" id="num1" placeholder="angka" value="<?= isset($num1) ? $num1 : '' ?>">
            <input type="text" name="num2" id="num2" placeholder="angka ke 2" value="<?= isset($num2) ? $num2 : '' ?>">
            <select name="operator" id="operator">
                <option <?= isset($operator) && $operator == 'add' ? 'selected' : '' ?> value="add">Tambah</option>
                <option <?= isset($operator) && $operator == 'subtract' ? 'selected' : '' ?> value="subtract">Kurang</option>
                <option <?= isset($operator) && $operator == 'multiply' ? 'selected' : '' ?> value="multiply">Kali</option>
                <option <?= isset($operator) && $operator == 'divide' ? 'selected' : '' ?> value="divide">Bagi</option>
            </select>
            <button type="submit" name="calculate" class="calc-btn">Hitung</button>
        </form>

        <!-- result -->
        <div class="result"> Result : <?= isset($result) ? $result : '' ?>
        </div>
    </div>
</body>

</html>