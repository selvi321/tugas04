<?php
header('Content-Type: application/json');

$a = $_GET['a'] ?? null; // sisi sejajar 1
$b = $_GET['b'] ?? null; // sisi sejajar 2
$t = $_GET['t'] ?? null; // tinggi

if ($a === null || $b === null || $t === null || $a <= 0 || $b <= 0 || $t <= 0) {
    echo json_encode(["error" => "Harap isi a,b,t > 0"]);
    exit;
}

$luas = 0.5 * ($a + $b) * $t;

echo json_encode([
    "rumus" => "L = 1/2 × (a + b) × t",
    "luas" => $luas
], JSON_PRETTY_PRINT);
