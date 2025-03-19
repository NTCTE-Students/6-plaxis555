<?php

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_FILES['image'])) {
    $uploadDir = 'uploads/'; 
    $uploadFile = $uploadDir . basename($_FILES['image']['name']);
    $imageFileType = strtolower(pathinfo($uploadFile, PATHINFO_EXTENSION));
    $maxFileSize = 2 * 1024 * 1024; 

    $allowedTypes = ['jpg', 'jpeg', 'png', 'gif'];
    if (!in_array($imageFileType, $allowedTypes)) {
        echo "Ошибка: Разрешены только файлы JPG, JPEG, PNG и GIF.";
    }
    elseif ($_FILES['image']['size'] > $maxFileSize) {
        echo "Ошибка: Файл слишком большой. Максимальный размер — 2 МБ.";
    }
    else {
        if (move_uploaded_file($_FILES['image']['tmp_name'], $uploadFile)) {
            echo "Файл успешно загружен: " . htmlspecialchars(basename($_FILES['image']['name']));
        } else {
            echo "Ошибка: Не удалось загрузить файл.";
        }
    }
}
?>