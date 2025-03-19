<?php

$filename = 'example.txt';

if (file_exists($filename)) {

    $content = file_get_contents($filename);

    $lines = file($filename);

    $lineCount = count($lines);

    print("<pre>Содержимое файла:\n{$content}</pre>");

    print("Количество строк в файле: {$lineCount}\n");
} else {
    print("Файл {$filename} не существует.");
}
?>