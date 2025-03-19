<?php
$filename = 'example.txt';
$newFilename = 'renamed_example.txt'; 

if (file_exists($filename)) {

    $content = file_get_contents($filename);

    print("<pre>Содержимое файла:\n{$content}</pre>");

    if (rename($filename, $newFilename)) {
        print("Файл успешно переименован в {$newFilename}.");
    } else {
        print("Ошибка при переименовании файла.");
    }
} else {
    print("Файл {$filename} не существует.");
}
?>