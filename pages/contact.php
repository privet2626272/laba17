<?php
include '../includes/header.php';
include '../includes/functions.php';
$formResult = handleContactForm();
?>
<section class="contact">
    <h1>Контакты</h1>
    <?php if ($formResult['success']) echo "<p class='success'>{$formResult['success']}</p>"; ?>
    <?php if ($formResult['error']) echo "<p class='error'>{$formResult['error']}</p>"; ?>
    <form method="post">
        <input type="text" name="name" placeholder="Имя">
        <input type="email" name="email" placeholder="Email">
        <textarea name="message" placeholder="Сообщение"></textarea>
        <button type="submit">Отправить</button>
    </form>
</section>
<?php include '../includes/footer.php'; ?>
