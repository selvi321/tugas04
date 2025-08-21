<?php
echo "<h2>Rumus Volume Kubus</h2>";
echo "Rumus: V = sisi³<br><br>";

// Soal
$sisi = 3;
echo "Soal: Hitunglah volume kubus dengan sisi = $sisi cm<br>";

// Fungsi
function volumeKubus($sisi) {
    return pow($sisi, 3);
}

// Jawaban
echo "Jawaban: " . volumeKubus($sisi) . " cm³";
?>