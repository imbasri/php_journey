<!-- if statements -->

<?php
$nilai = 75;

if ($nilai >= 90) {
    echo "Nilai A";
} elseif ($nilai >= 75) {
    echo "Nilai B";
} else {
    echo "Nilai C";
}
?>

<!-- switch case -->
g<?php
$bendera = "indonesia";

switch ($bendera) {
    case 'indonesia':
        echo "Indonesia";
        break;
    case 'jepang';
        echo "Jepang";
        break;
    default:
        echo "bukan bendera";
        break;
}
?>