<?php
echo "sad";
?>

<?php

echo "<h2>Задание 1. Функция mul(a, b)</h2>";

function mul($a, $b) {
    $result = $a * $b;
    return $result;
}
echo "Ответ - " . mul(28, 29) . ";<br><br>";

echo "<h2>Задание 2. Функция m(a, b) — два варианта реализации</h2>";


function m1($a, $b) {
    return mul($a, $b);
}
echo "Вариант 1 (прямая передача) - " . m1(123, 3) . ";<br>";


$a = 10;
$b = 24;
$m2 = function () use ($a, $b) {
    return mul($a, $b);
};
echo "Вариант 2 (через use) - " . $m2() . ";<br><br>";

echo "<h2>Задание 3. Функция operation(m, n, o)</h2>";

function operation($m, $n, $o) {
    return $o($m, $n);
}


$sum = function($x, $y) { return $x + $y; };
$difference = function($x, $y) { return $x - $y; };

echo "Сложение 5 и 3: " . operation(5, 3, $sum) . ";<br>";
echo "Вычитание 10 и 4: " . operation(10, 4, $difference) . ";<br><br>";

echo "<h2>Задание 4. Функция array_map(fn, array)</h2>";

function array_map($fn, $array) {
    $result = [];
    foreach ($array as $item) {
        $result[] = $fn($item);
    }
    return $result;
}

$numbers = [1, 2, 3, 4, 5];
$squared = array_map(function($x) { return $x ** 2; }, $numbers);
echo "Исходный массив: " . implode(", ", $numbers) . "<br>";
echo "Квадраты элементов: " . implode(", ", $squared) . ";<br><br>";

echo "<h2>Задание 5. Проверка длины пароля</h2>";

$password = "secret123";
$length = strlen($password);

if ($length > 5 && $length < 10) {
    echo "Пароль подходит.<br><br>";
} else {
    echo "Нужно придумать другой пароль.<br><br>";
}



























