<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Регистрация</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="form-container">
        <h2>Регистрация</h2>
        <form action="action.php" method="POST">
            <label for="name">Имя:</label>
            <input type="text" id="name" name="name" placeholder="Введите имя" required>

            <label for="email">Почта:</label>
            <input type="email" id="email" name="email" placeholder="name@example.ru" required>

            <label for="password">Пароль:</label>
            <input type="password" id="password" name="password" placeholder="Введите пароль" required>

            <label for="confirm_password">Подтвердите пароль:</label>
            <input type="password" id="confirm_password" name="confirm_password" placeholder="Повторите пароль" required>

            <label for="gender">Пол:</label>
            <select id="gender" name="gender" required>
                <option value="" disabled selected>Выберите пол</option>
                <option value="male">Мужской</option>
                <option value="female">Женский</option>
                <option value="other">Другой</option>
            </select>

            <div class="checkbox-group">
                <input type="checkbox" id="agree" name="agree" required>
                <label for="agree">Создавая учетную запись, вы соглашаетесь с нашими <a href="#">Условиями и конфиденциальностью</a></label>
            </div>

            <button type="submit">Зарегистрироваться</button>
        </form>
    </div>
</body>

</html>
