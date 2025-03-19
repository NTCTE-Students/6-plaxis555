<?php
function backupDirectory($source, $destination) {

    if (!is_dir($destination)) {

        mkdir($destination, 0755, true);
    }

    $dir = opendir($source);
    while (($file = readdir($dir)) !== false) {
        if ($file !== '.' && $file !== '..') {
            $sourcePath = $source . DIRECTORY_SEPARATOR . $file;
            $destinationPath = $destination . DIRECTORY_SEPARATOR . $file;

            if (is_dir($sourcePath)) {
                
                backupDirectory($sourcePath, $destinationPath); 
            } else {

                if (copy($sourcePath, $destinationPath)) {

                    echo "Файл '{$file}' успешно скопирован.<br>";

                } else {

                    echo "Ошибка: Не удалось скопировать файл '{$file}'.<br>";
                }
            }
        }
    }
    closedir($dir);
}

backupDirectory($sourceDir, $backupDir);