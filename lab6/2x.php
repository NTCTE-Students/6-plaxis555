<?php

$filename = 'example.txt';


$data = 'Это новая строка, которая будет записана в файл.\n';


$result = file_put_contents($filename, $data);


if ($result !== false) {
    print('Данные успешно записаны в файл $filename.');
} else {
    print('Ошибка при записи в файл $filename.');
}