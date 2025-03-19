<?php

$filename = 'example.txt';

$newFilename = 'copy_example.txt';

if (file_exists($filename)) {

    if (copy($filename, $newFilename)) {
        print("Файл успешно скопирован в '{$newFilename}'.\n");

    if (unlink($newFilename)) {
         print("Файл '{$newFilename}' успешно удалён.\n");
    } else {
        print("Ошибка: Не удалось удалить файл '{$newFilename}'.\n");
    }
    } else {
        print("Ошибка: Не удалось скопировать файл.\n");
    }
} else {
    print("Файл {$filename} не существует.");
}
?>