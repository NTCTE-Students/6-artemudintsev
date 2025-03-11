<?php

$filename = 'data.json';

$jsonData = file_get_contents($filename);

$data = json_decode($jsonData, true);


$data[] = [
    'id' => 3,
    'name' => 'Новый элемент',
    'description' => 'Это новый элемент, добавленный через PHP.'
];

$newJsonData = json_encode($data, JSON_PRETTY_PRINT);

file_put_contents($filename, $newJsonData);

print("Данные успешно обновлены и записаны в файл $filename.");