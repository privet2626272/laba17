<?php
header("Content-Type: application/json; charset=utf-8");

$date = $_GET['date'] ?? null;

if (!$date) {
    echo json_encode(["error" => "date parameter is required"]);
    exit;
}

$timestamp = strtotime($date);

if (!$timestamp) {
    echo json_encode(["error" => "invalid date format"]);
    exit;
}

echo json_encode([
    "date" => $date,
    "weekday" => date("l", $timestamp)
]);
