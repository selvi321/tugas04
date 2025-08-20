<?php
header('Content-Type: application/json');

$s = $_GET['s'] ?? null; // sisi

if ($s === null || $s <= 0) {
    echo json_encode(["error" => "Harap isi s > 0"]);
    exit;
}

$volume = $s ** 3;

echo json_encode([
    "rumus" => "V = s³",
    "volume" => $volume
], JSON_PRETTY_PRINT);
