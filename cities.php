<?php
require 'config.php';

$country = $_GET['country'] ?? null;

if (!$country) {
    echo json_encode(["error" => "No country"]);
    exit;
}

$sql = "
SELECT cities.name 
FROM cities
JOIN countries ON cities.country_id = countries.id
WHERE countries.name = :country
";

$stmt = $pdo->prepare($sql);
$stmt->execute(["country" => $country]);

$cities = $stmt->fetchAll(PDO::FETCH_COLUMN);

echo json_encode($cities);
