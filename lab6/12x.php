<?php

$logFile = 'app.log';

$message = "Это тестовое сообщение для лог-файла.";

$currentDateTime = date('Y-m-d H:i:s');

$logEntry = "[{$currentDateTime}] {$message}" . PHP_EOL;

if ($handle = fopen($logFile, 'a')) {

    fwrite($handle, $logEntry);

    fclose($handle);

    echo "Сообщение успешно записано в лог-файл.";
} else {
    echo "Ошибка: Не удалось открыть лог-файл для записи.";
}
?>