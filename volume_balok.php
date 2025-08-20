<?php
header('Content-Type: application/json');

$p = $_GET['p'] ?? null;
$l = $_GET['l'] ?? null;
$t = $_GET['t'] ?? null;

if ($p === null || $l === null || $t === null || $p <= 0 || $l <= 0 || $t <= 0) {
    echo json_encode(["error" => "Harap isi p,l,t > 0"]);
    exit;
}

$volume = $p * $l * $t;

echo json_encode([
    "rumus" => "V = p × l × t",
    "volume" => $volume
], JSON_PRETTY_PRINT);
