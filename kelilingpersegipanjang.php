<?php
echo "<h2>Rumus Keliling Persegi Panjang</h2>";
echo "Rumus: K = 2 x (p + l)<br><br>";

// Soal
$panjang = 10;
$lebar = 4;
echo "Soal: Hitunglah keliling persegi panjang dengan panjang = $panjang cm dan lebar = $lebar cm<br>";

// Fungsi
function kelilingPersegiPanjang($panjang, $lebar) {
    return 2 * ($panjang + $lebar);
}

// Jawaban
echo "Jawaban: " . kelilingPersegiPanjang($panjang, $lebar) . " cm";
?>