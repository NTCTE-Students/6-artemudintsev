<?php 
if (file_exists('example.txt')) {
    $file = fopen('example.txt', 'r');
    $count_line = 0;
    while (($line = fgets($file)) !== false) {
        $count_line ++;
    }
    print('Кол-во строк '. $count_line);
    fclose($file);
} else {
    print('Файл не найден.');
}