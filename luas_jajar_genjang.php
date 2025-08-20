<?php
header('Content-Type: application/json');

$a = $_GET['a'] ?? null; // alas
$t = $_GET['t'] ?? null; // tinggi

if ($a === null || $t === null || $a <= 0 || $t <= 0) {
    echo json_encode(["error" => "Harap isi a,t > 0"]);
    exit;
}

$luas = $a * $t;

echo json_encode([
    "rumus" => "L = a × t",
    "luas" => $luas
], JSON_PRETTY_PRINT);
