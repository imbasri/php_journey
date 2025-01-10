<!-- while loop -->

<?php
echo "while loop <br>";
$i = 1;
while ($i <= 10) {
    echo "Hello World $i <br>";
    $i++;
}
?>

<!-- do while loop -->
<?php
echo "<br>";
echo "<br>";
echo "do while loop <br>";
$i = 1;
do {
    echo "Hello World $i <br>";
    $i++;
} while ($i >= 10);
?>

<!-- for loop -->

<?php
echo "<br>";
echo "<br>";
for ($i = 1; $i <= 10; $i++) {
    echo "print $i <br>";
}
?>

<!-- foreach loop -->

<?php
$hobi = ["membaca", "makan", "tidur", "coding"];
echo "<br>";
echo "<br>";
echo "foreach loop <br>";
foreach ($hobi as $item) {
    echo "$item <br>";
}
?>