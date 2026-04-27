<?php


if (!isset($_SESSION)) {
    session_start();
}
?>

<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Калькулятор</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="calculator">
        <h2>Калькулятор</h2>
        <form action="calculator.php" method="POST">
            <input type="text" name="num1" id="num1"  placeholder="Введите выражение" required>
 <input type="text" name="num2" id="num2" placeholder="Введите выражение" required>
            <div class="buttons">

                <button type="submit" name="operation" value="+">+</button>
                <button type="submit" name="operation" value="-">-</button>
                <button type="submit" name="operation" value="*">*</button>
                <button type="submit" name="operation" value="/">/</button>
            </div>
        </form>
        <?php
if (isset($_POST['operation']) && isset($_POST['input'])) {
    $input = $_POST['input'];
    $operation = $_POST['operation'];

    // разбиваем строку на два числа (например: "5 3")
    $parts = explode(' ', $input);

    if (count($parts) != 2) {
        echo "<h3>Введите два числа через пробел</h3>";
        exit;
    }

    $a = (float)$parts[0];
    $b = (float)$parts[1];

    switch ($operation) {
        case '+':
            $result = $a + $b;
            break;
        case '-':
            $result = $a - $b;
            break;
        case '*':
            $result = $a * $b;
            break;
        case '/':
            if ($b == 0) {
                echo "<h3>Ошибка: деление на ноль</h3>";
                exit;
            }
            $result = $a / $b;
            break;
        default:
            echo "<h3>Неизвестная операция</h3>";
            exit;
    }

    echo "<h3>Результат: $result</h3>";
}
?>
    </div>
</body>
</html>
