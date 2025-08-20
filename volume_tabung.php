<?php
header('Content-Type: application/json');

$r = $_GET['r'] ?? null;
$t = $_GET['t'] ?? null;

if ($r === null || $t === null || $r <= 0 || $t <= 0) {
    echo json_encode(["error" => "Harap isi r,t > 0"]);
    exit;
}

$volume = M_PI * pow($r, 2) * $t;

echo json_encode([
    "rumus" => "V = πr²t",
    "volume" => round($volume, 2)
], JSON_PRETTY_PRINT);
