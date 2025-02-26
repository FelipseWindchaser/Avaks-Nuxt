<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    // Получаем JSON-данные из тела запроса
    $json = file_get_contents('php://input');
    $data = json_decode($json, true);

    if ($data) {
        // Проверяем наличие всех обязательных полей
        $requiredFields = ['email'];

        foreach ($requiredFields as $field) {
            if (empty($data[$field])) {
                echo json_encode(["error" => "Ошибка: поле '$field' обязательно!"]);
                exit;
            }
        }

        // First sanitize the email by trimming
        $email = trim($data['email']);
        
        // Validate email
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            echo json_encode(["error" => "Некорректный email адрес"]);
            exit;
        }

        // Список email-адресов, куда нужно отправить письмо
        $recipients = ["felipsesolaris@gmail.com"];

        // Формируем сообщение
        $subject = "Заявка на получение новостной рассылки с сайта avaks";
        $body = "Email: $email";
        $headers = "From: no-reply@avaks.com\r\nContent-Type: text/plain; charset=UTF-8";

        // Флаг успешной отправки
        $allSent = true;

        foreach ($recipients as $to) {
            if (!mail($to, $subject, $body, $headers)) {
                $allSent = false;
            }
        }

        header('Content-Type: application/json; charset=utf-8');
        if ($allSent) {
            echo "Подписка успешно оформлена";
        } else {
            echo "Ошибка при оформлении подписки";
        }
    } else {
        echo "Некорректные данные";
    }
}
?>
