<?php


$filename = 'example.txt';


$newData = 'Эта строка будет добавлена в конец файла.\n';


$result = file_put_contents($filename, $newData, FILE_APPEND);


if ($result !== false) {
    print('Данные успешно добавлены в файл $filename.');
} else {
    print('Ошибка при добавлении данных в файл $filename.');
}