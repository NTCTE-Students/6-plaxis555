<?php

$inputFile = 'input.txt';

$outputFile = 'output.txt';

$searchWord = 'старое_слово';

$replaceWord = 'новое_слово';

$content = file_get_contents($inputFile);

$newContent = str_replace($searchWord, $replaceWord, $content);

file_put_contents($outputFile, $newContent);

echo "Замена завершена. Результат сохранен в файл $outputFile";
?>