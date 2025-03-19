<?php
$jsonFile = 'data.json';

if (file_exists($jsonFile)) {
    $jsonData = file_get_contents($jsonFile);

    $data = json_decode($jsonData, true);

    if ($data === null) {
        die("Ошибка: Не удалось декодировать JSON.");
    }
} else {
    $data = [];
}

$newItem = [
    'id' => count($data) + 1, 
    'name' => 'Новый элемент',
    'description' => 'Это новый элемент, добавленный в JSON-файл.'
];

$data[] = $newItem;

$updatedJsonData = json_encode($data, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE);

if (file_put_contents($jsonFile, $updatedJsonData)) {
    echo "Новый элемент успешно добавлен в JSON-файл.";
} else {
    echo "Ошибка: Не удалось записать данные в файл.";
}

echo "<pre>" . htmlspecialchars($updatedJsonData) . "</pre>";
?>