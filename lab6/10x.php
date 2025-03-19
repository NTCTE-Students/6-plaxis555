<?php
$csvFile = 'data.csv';


if (file_exists($csvFile) && ($handle = fopen($csvFile, 'r')) !== false) {

    fputcsv($handle, [$name, $age, $city]);
    
    echo "<table border='1'>\n";

    while (($data = fgetcsv($handle, 1000, ',')) !== false) {
        echo "<tr>"; 
        foreach ($data as $cell) {
            echo "<td>" . htmlspecialchars($cell) . "</td>"; 
        }
        echo "</tr>\n";
    }

    echo "</table>\n";

    fclose($handle);
} else {
    echo "Ошибка: Файл не найден или не может быть открыт.";
}
?>