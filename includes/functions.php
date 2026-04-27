<?php
function e($string) {
    return htmlspecialchars($string, ENT_QUOTES, 'UTF-8');
}

function handleContactForm() {
    $result = ['success' => '', 'error' => ''];

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $name = e($_POST['name'] ?? '');
        $email = filter_var($_POST['email'] ?? '', FILTER_VALIDATE_EMAIL);
        $message = e($_POST['message'] ?? '');

        if ($name && $email && $message) {
            $to = "firuzatutu@gmail.com"; 
            $subject = "Сообщение с сайта от $name";
            $body = "Имя: $name\nEmail: $email\nСообщение:\n$message";
            $headers = "From: $email";

            if (mail($to, $subject, $body, $headers)) {
                $result['success'] = "Сообщение отправлено!";
            } else {
                $result['error'] = "Ошибка отправки сообщения.";
            }
        } else {
            $result['error'] = "Пожалуйста, заполните все поля корректно.";
        }
    }
    return $result;
}
