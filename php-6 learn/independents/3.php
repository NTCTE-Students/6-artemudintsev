<?php

$filename = 'example.txt';

$newData = 'Создайте скрипт, который добавляет новую строку в конец существующего файла. Если файл не существует, создайте его.';

$result = file_put_contents($filename, $newData, FILE_APPEND);