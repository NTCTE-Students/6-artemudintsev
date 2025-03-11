<?php 
$word = 'Proin';
if (file_exists('example.txt')) {
    $file = fopen('example.txt', 'r');
    $count_word = 0;
    while (($line = fgets($file)) !== false) {
        if (strpos( strtolower($line), strtolower($word)) !== false) {
            $count_word++;
        }
    }
    
    print('Кол-во слов "Proin" в тексте: '. $count_word);
    fclose($file);
} else {
    print('Файл не найден.');
}