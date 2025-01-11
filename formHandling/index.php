<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Handling</title>
</head>

<body>
    <form action="index.php" method="POST" style="display: flex;flex-direction: column; gap: 10px;">
        <div>
            <label for="name">Nama :</label>
            <input type="text" name="name" id="name">
        </div>
        <br>
        <div>
            <label for="email">Email :</label>
            <input type="text" email="email" id="email" name="email">
        </div>
        <input style="width: 200px;" type="submit" value="kirim">
    </form>
</body>

</html>

<?php

if (empty($_POST["name"])) {
    echo "Nama Tidak Boleh Kosong <br>";
} else {
    echo htmlspecialchars($_POST["name"]) . "<br>";
}
if (empty($_POST["email"])) {
    echo "Email Tidak Boleh Kosong";
} elseif (!filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)) {
    echo "Email Tidak Valid";
} else {
    echo htmlspecialchars($_POST["email"]) . "<br>";
}

echo $_POST["name"] . "<br>";
echo $_POST["email"];

?>