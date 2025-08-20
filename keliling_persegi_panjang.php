<?php
header('Content-Type: application/json');

$p = $_GET['p'] ?? null; // panjang
$l = $_GET['l'] ?? null; // lebar

if ($p === null || $l === null || $p <= 0 || $l <= 0) {
    echo json_encode(["error" => "Harap isi p,l > 0"]);
    exit;
}

$keliling = 2 * ($p + $l);
$luas = $p * $l;

echo json_encode([
    "rumus_keliling" => "K = 2(p + l)",
    "rumus_luas" => "L = p × l",
    "keliling" => $keliling,
    "luas" => $luas
], JSON_PRETTY_PRINT);
