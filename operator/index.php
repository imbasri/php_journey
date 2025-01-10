<!-- aritmatika -->
<?= "operator aritmatika";
$a = 10;
$b = 20;
echo "<br/>";
echo $a + $b;
echo "<br>";
echo $a - $b;
echo "<br>";
echo $a * $b;
echo "<br>";
echo $a / $b;
echo "<br>";
echo $a % $b;
echo "<br>";
echo $a ** $b;
echo "<br>";
?>


<!-- perbandingan -->
<?php echo "<br>";
echo "<br>";
echo "operator perbandingan";
$c = 10;
$d = 20;
echo "<br>";
echo "angka a : $c  dan angka b : $d";
echo  "<br>";
var_dump($c == $d);
echo "==";
echo  "<br>";
var_dump($c != $d);
echo "!=";
echo  "<br>";
var_dump($c === $d);
echo "===";
echo  "<br>";
var_dump($c < $d);
echo "<";
echo  "<br>";
var_dump($c > $d);
echo ">";
echo  "<br>";
var_dump($c <= $d);
echo "<=";
echo  "<br>";
var_dump($c >= $d);
echo ">=";
echo "<br>";
?>


<!-- logika -->
<?php echo "<br>";
echo "operator logika";
echo "<br>";
$x = true;
$y = false;

echo " x && y = ";
var_dump($x && $y);
echo "<br>";
echo " x || y = ";
var_dump($x || $y);
echo "<br>";
echo " !x = ";
var_dump(!$x);
echo "<br>";
echo " x xor y  = ";
var_dump($x xor $y);
?>