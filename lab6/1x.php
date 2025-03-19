<?php


$filename = 'example.txt';

if (file_exists($filename)) {

    $content = file_get_contents($filename);

    print("<pre>Содержимое файла:\n{$content}</pre>");
} else {
    print("Файл {$filename} не существует.");
}

?>