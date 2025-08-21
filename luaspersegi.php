<?php
echo "<h2>Rumus Luas Persegi</h2>";
echo "Rumus: L = sisi x sisi<br><br>";

// Soal
$sisi = 5;
echo "Soal: Hitunglah luas persegi dengan sisi = $sisi cm<br>";

// Fungsi
function luasPersegi($sisi) {
    return $sisi * $sisi;
}

// Jawaban
echo "Jawaban: " . luasPersegi($sisi) . " cm²";
?>