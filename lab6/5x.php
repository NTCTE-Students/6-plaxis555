<?php

$filename = 'example.txt';

if (file_exists($filename)) {

    $content = file_get_contents($filename);

    print("<pre>Содержимое файла:\n{$content}</pre>");

    $searchWord = 'мир'; 
    if (stripos($content, $searchWord) !== false) {
        print("Слово '{$searchWord}' найдено в файле.\n");
    } else {
        print("Слово '{$searchWord}' не найдено в файле.\n");
    }
} else {
    print("Файл {$filename} не существует.");
}
?>