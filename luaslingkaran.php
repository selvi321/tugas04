<?php
echo "<h2>Rumus Luas Lingkaran</h2>";
echo "Rumus: L = π x r²<br><br>";

// Soal
$jari = 7;
echo "Soal: Hitunglah luas lingkaran dengan jari-jari = $jari cm<br>";

// Fungsi
function luasLingkaran($jari) {
    return M_PI * $jari * $jari; // lebih presisi pakai M_PI
}

// Jawaban
echo "Jawaban: " . luasLingkaran($jari) . " cm²";
?>