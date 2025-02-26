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
        function sanitizeInput($input) {
            $input = strip_tags($input);  // Remove HTML tags
            $input = preg_replace('/[^\p{L}\p{N}\s\-\.\,\"\']/u', '', $input); // Allow letters, numbers, spaces, dots, commas, quotes
            $input = trim($input);
            return $input;
        }

        $fullname = sanitizeInput($data['fullname']);
        $company = sanitizeInput($data['company']);
        $city = sanitizeInput($data['city']);
        $email = filter_var(trim($data['email']), FILTER_SANITIZE_EMAIL);
        $phone = preg_replace('/[^\d\+\-\(\)\s]/', '', $data['phone']); // Only allow digits, +, -, (), spaces
        $content = sanitizeInput($data['content']);

        // Validate email after sanitization
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            echo "Некорректный email адрес";
            exit;
        }

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

        header('Content-Type: application/json; charset=utf-8');
        if ($allSent) {
            echo "Заявка успешно отправлена";
        } else {
            echo "Ошибка при отправке заявки";
        }
    } else {
        echo "Некорректные данные";
    }
}
?>
