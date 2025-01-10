<?php
function salam($waktu = "Datang", $nama = "Admin")
{
    echo "Selamat $waktu, $nama";
}
function penjumlahan($angka1, $angka2)
{
    return $angka1 + $angka2;
}
echo "penjumlahan : " . penjumlahan(10, 20);
echo "<br>";
salam('hello', 'imbasri');
