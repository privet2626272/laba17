<?php
header("Content-Type: application/json; charset=utf-8");

$date1 = $_GET['date1'] ?? null;
$date2 = $_GET['date2'] ?? null;

if (!$date1 || !$date2) {
    echo json_encode(["error" => "date1 and date2 are required"]);
    exit;
}

$t1 = strtotime($date1);
$t2 = strtotime($date2);

if (!$t1 || !$t2) {
    echo json_encode(["error" => "invalid date format"]);
    exit;
}

$diffSeconds = abs($t2 - $t1);
$days = $diffSeconds / 86400;

echo json_encode([
    "date1" => $date1,
    "date2" => $date2,
    "days" => $days
]);
