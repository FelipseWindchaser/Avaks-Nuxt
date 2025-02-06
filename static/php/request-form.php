<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    // Получаем JSON-данные из тела запроса
    $json = file_get_contents('php://input');
    $data = json_decode($json, true);

    if ($data) {
        // Проверяем наличие всех обязательных полей
        $requiredFields = ['fullname','company', 'city', 'email', 'phone', 'content'];

        foreach ($requiredFields as $field) {
            if (empty($data[$field])) {
                echo json_encode(["error" => "Ошибка: поле '$field' обязательно!"]);
                exit;
            }
        }

        // Очищаем и обрабатываем входные данные
        $fullname = htmlspecialchars(trim($data['fullname']));
        $company = htmlspecialchars(trim($data['company']));
        $city = htmlspecialchars(trim($data['city']));
        $email = htmlspecialchars(trim($data['email']));
        $phone = htmlspecialchars(trim($data['phone']));
        $content = htmlspecialchars(trim($data['content']));

        // Список email-адресов, куда нужно отправить письмо
        $recipients = ["felipsesolaris@gmail.com"];

        // Формируем сообщение
        $subject = "Новая заявка на партнерство с сайта avaks";
        $body = "ФИО: $fullname\nEmail: $email\nКомпания: $company\nГород: $city\nТелефон: $phone\nДополнительная информация: $content";
        $headers = "From: no-reply@avaks.com\r\nContent-Type: text/plain; charset=UTF-8";

        // Флаг успешной отправки
        $allSent = true;

        foreach ($recipients as $to) {
            if (!mail($to, $subject, $body, $headers)) {
                $allSent = false;
            }
        }

        // Отправляем результат в формате JSON
        if ($allSent) {
            echo json_encode(["success" => "Письма успешно отправлены"]);
        } else {
            echo json_encode(["error" => "Ошибка при отправке писем"]);
        }
    } else {
        echo json_encode(["error" => "Некорректные данные"]);
    }
}
?>
