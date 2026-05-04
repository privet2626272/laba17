<?php

$lat = 59.9386;
$lon = 30.2141;
$city = "Санкт-Петербург";

function getWeather($lat, $lon)
{
    $url = "https://api.open-meteo.com/v1/forecast?"
        . "latitude=$lat&longitude=$lon"
        . "&current_weather=true"
        . "&daily=temperature_2m_max,temperature_2m_min,weathercode"
        . "&timezone=auto";

    $response = file_get_contents($url);

    if (!$response) {
        return ["error" => "API error"];
    }

    return json_decode($response, true);
}

function weatherText($code)
{
    $map = [
        0 => "☀️ Ясно",
        1 => "🌤️ Почти ясно",
        2 => "⛅ Облачно",
        3 => "☁️ Пасмурно",
        45 => "🌫️ Туман",
        61 => "🌧️ Дождь",
        71 => "❄️ Снег",
        80 => "🌦️ Ливень",
        95 => "⛈️ Гроза"
    ];

    return $map[$code] ?? "❓";
}

$data = getWeather($lat, $lon);
?>

<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Погода</title>
    <style>
    body {
        margin: 0;
        font-family: Arial, sans-serif;
        background: linear-gradient(135deg, #ff4d6d, #ff8fab, #ffc2d1);
        color: #fff;
        text-align: center;
        min-height: 100vh;
        display: flex;
        justify-content: center;
        align-items: center;
    }

    .box {
        background: rgba(255, 255, 255, 0.15);
        backdrop-filter: blur(12px);
        border-radius: 20px;
        padding: 25px;
        width: 90%;
        max-width: 520px;
        box-shadow: 0 10px 30px rgba(0,0,0,0.2);
        border: 1px solid rgba(255,255,255,0.3);
    }

    h1 {
        margin-bottom: 10px;
        text-shadow: 0 2px 10px rgba(0,0,0,0.2);
    }

    .temp {
        font-size: 60px;
        font-weight: bold;
        margin: 10px 0;
        text-shadow: 0 3px 15px rgba(255, 255, 255, 0.4);
    }

    p {
        font-size: 18px;
        opacity: 0.95;
    }

    h3 {
        margin-top: 25px;
        margin-bottom: 10px;
    }

    .card {
        background: rgba(255, 255, 255, 0.2);
        margin: 10px 0;
        padding: 12px;
        border-radius: 15px;
        transition: 0.3s;
        border: 1px solid rgba(255,255,255,0.3);
    }

    .card:hover {
        transform: scale(1.03);
        background: rgba(255, 255, 255, 0.3);
    }

    .error {
        background: rgba(255, 0, 80, 0.3);
        padding: 10px;
        border-radius: 10px;
    }
</style>
</head>
<body>

<div class="box">

<h1>🌍 <?= $city ?></h1>

<?php if (isset($data["error"])): ?>

    <p><?= $data["error"] ?></p>

<?php else: ?>

    <div class="temp">
        <?= $data["current_weather"]["temperature"] ?>°C
    </div>

    <p>
        <?= weatherText($data["current_weather"]["weathercode"]) ?>
    </p>

    <h3>7 дней</h3>

    <?php for ($i = 0; $i < 7; $i++): ?>
        <div class="card">
            <?= $data["daily"]["time"][$i] ?><br>
            <?= $data["daily"]["temperature_2m_max"][$i] ?>° /
            <?= $data["daily"]["temperature_2m_min"][$i] ?>°<br>
            <?= weatherText($data["daily"]["weathercode"][$i]) ?>
        </div>
    <?php endfor; ?>

<?php endif; ?>

</div>

</body>
</html>
