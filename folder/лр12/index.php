<?php
echo "Задание 1<br>";
$arr1 = ['a', 'b', 'c', 'd', 'e'];
$result1 = array_map('strtoupper', $arr1);
echo "Ответ: [" . implode(', ', $result1) . "]<br><br>";

echo "Задание 2<br>";
$arr2 = ['apple', 'banana', 'cherry'];
$lastElement = $arr2[count($arr2) - 1];
echo "Ответ: " . $lastElement . "<br><br>";

echo "Задание 3<br>";
$arr3 = [1, 2, 3, 4, 5];
if (array_search(3, $arr3) !== false) {
    echo "Ответ: Элемент со значением 3 есть в массиве<br><br>";
} else {
    echo "Ответ: Элемента со значением 3 нет в массиве<br><br>";
}

echo "Задание 4<br>";
$arr4_1 = [1, 2, 3];
$arr4_2 = ['a', 'b', 'c'];
$result4 = array_merge($arr4_1, $arr4_2);
echo "Ответ: [" . implode(', ', $result4) . "]<br><br>";

echo "Задание 5<br>";
$arr5 = [1, 2, 3, 4, 5];
$result5 = array_slice($arr5, 1, 3);
echo "Ответ: [" . implode(', ', $result5) . "]<br><br>";

echo "Задание 6<br>";
$arr6 = ['a' => 1, 'b' => 2, 'c' => 3];
$keys = array_keys($arr6);
$values = array_values($arr6);
echo "Ответ:<br>";
echo "Ключи: [" . implode(', ', $keys) . "]<br>";
echo "Значения: [" . implode(', ', $values) . "]<br><br>";

echo "Задание 7<br>";
$keys7 = ['a', 'b', 'c'];
$values7 = [1, 2, 3];
$result7 = array_combine($keys7, $values7);
echo "Ответ: <br>";
print_r($result7);
echo "<br><br>";

echo "Задание 8<br>";
$arr8 = ['a', '-', 'b', '-', 'c', '-', 'd'];
$position = array_search('-', $arr8);
echo "Ответ: Позиция первого элемента '-' — " . $position . "<br><br>";

echo "Задание 9<br>";
$arr9 = ['3' => 'a', '1' => 'c', '2' => 'e', '4' => 'b'];

echo "Исходный массив:<br>";
print_r($arr9);
echo "<br>";

$sortedByKeys = $arr9;
ksort($sortedByKeys);
echo "Сортировка по ключам (ksort):<br>";
print_r($sortedByKeys);
echo "<br>";

$sortedByValues = $arr9;
asort($sortedByValues);
echo "Сортировка по значениям (asort):<br>";
print_r($sortedByValues);
echo "<br>";

$reverseSortedByKeys = $arr9;
krsort($reverseSortedByKeys);
echo "Обратная сортировка по ключам (krsort):<br>";
print_r($reverseSortedByKeys);
echo "<br>";

$reverseSortedByValues = $arr9;
arsort($reverseSortedByValues);
echo "Обратная сортировка по значениям (arsort):<br>";
print_r($reverseSortedByValues);
echo "<br><br>";

echo "Задание 10<br>";
$str10 = '1234567890';
$digits = str_split($str10);
$sum = array_sum($digits);
echo "Ответ: Сумма цифр строки '" . $str10 . "' равна " . $sum . "<br><br>";

echo "Задание 11<br>";
$filledArray = array_fill(0, 10, 'x');
echo "Ответ: [" . implode(', ', $filledArray) . "]<br><br>";

echo "Задание 12<br>";
$arr12_1 = [1, 2, 3, 4, 5];
$arr12_2 = [3, 4, 5, 6, 7];
$commonElements = array_intersect($arr12_1, $arr12_2);
echo "Ответ: [" . implode(', ', $commonElements) . "]<br>";

echo "Исходный массив:\n";
print_r($arr9);

$sortedByKeys = $arr9;
ksort($sortedByKeys);
echo "Сортировка по ключам (ksort):\n";
print_r($sortedByKeys);

$sortedByValues = $arr9;
asort($sortedByValues);
echo "Сортировка по значениям (asort):\n";
print_r($sortedByValues);

$reverseSortedByKeys = $arr9;
krsort($reverseSortedByKeys);
echo "Обратная сортировка по ключам (krsort):\n";
print_r($reverseSortedByKeys);

$reverseSortedByValues = $arr9;
arsort($reverseSortedByValues);
echo "Обратная сортировка по значениям (arsort):\n";
print_r($reverseSortedByValues);

echo "\nЗадание 10\n";
$str10 = '1234567890';
$digits = str_split($str10);
$sum = array_sum($digits);
echo "Ответ: Сумма цифр строки '" . $str10 . "' равна " . $sum . "\n\n";

echo "Задание 11\n";
$filledArray = array_fill(0, 10, 'x');
echo "Ответ: [" . implode(', ', $filledArray) . "]\n\n";

echo "Задание 12\n";
$arr12_1 = [1, 2, 3, 4, 5];
$arr12_2 = [3, 4, 5, 6, 7];
$commonElements = array_intersect($arr12_1, $arr12_2);
echo "Ответ: [" . implode(', ', $commonElements) . "]\n";

