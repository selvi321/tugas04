<?php
echo "<h2>Rumus Phytagoras</h2>";
echo "Rumus: c = √(a² + b²)<br><br>";

// Soal
$a = 6;
$b = 8;
echo "Soal: Hitunglah sisi miring segitiga siku-siku jika a = $a cm dan b = $b cm<br>";

// Fungsi
function phytagoras($a, $b) {
    return sqrt(pow($a, 2) + pow($b, 2));
}

// Jawaban
echo "Jawaban: " . phytagoras($a, $b) . " cm";
?>