<?php

if (file_exists('example.txt')) {
    $file = fopen('example.txt', 'r');
    
    while (($line = fgets($file)) !== false) {
        print("{$line}<br>");
    }
    
    fclose($file);
} else {
    print('Файл не найден.');
}