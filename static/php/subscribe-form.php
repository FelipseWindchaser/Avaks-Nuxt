<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    // Получаем JSON-данные из тела запроса
    $json = file_get_contents('php://input');

    // Преобразуем JSON в ассоциативный массив
    $data = json_decode($json, true);

    // Проверяем, что email передан и не пустой
    if (empty($data['email'])) {
        echo "Ошибка: email обязателен!";
        exit;
    }

    // Очищаем email от возможных вредоносных данных
    $email = filter_var(trim($data['email']), FILTER_SANITIZE_EMAIL);

    // Проверяем корректность email
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo "Ошибка: некорректный email!";
        exit;
    }

    // Список email-адресов получателей
    $recipients = [
        "felipsesolaris@gmail.com"
    ];

    // Формируем сообщение
    $subject = "Заявка на получение новостной рассылки с сайта avaks";
    $body = "Email: $email";
    $headers = "From: no-reply@avaks.com\r\nContent-Type: text/plain; charset=UTF-8";

    // Флаг для отслеживания успешной отправки
    $allSent = true;

    // Отправка письма каждому получателю
    foreach ($recipients as $to) {
        if (!mail($to, $subject, $body, $headers)) {
            $allSent = false;
        }
    }

    // Результат отправки
    if ($allSent) {
        echo "Письмо успешно отправлено";
    } else {
        echo "Ошибка при отправке письма";
    }
}
?>
