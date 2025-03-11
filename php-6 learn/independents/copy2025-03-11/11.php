<?php

if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_FILES['file'])) {
    $target_dir = __DIR__ . '/uploads/';
    $target_file = $target_dir . basename($_FILES['file']['name']);
    $uploadOk = 1;
    $fileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
    
    $check = getimagesize($_FILES['file']['tmp_name']);
    if ($check !== false) {
        print("Файл является изображением - {$check['mime']}<br>");
        $uploadOk = 1;
    } else {
        print('Файл не является изображением.<br>');
        $uploadOk = 0;
    }
    
    if ($_FILES['file']['size'] > 2000000) {
        print('Файл слишком большой.<br>');
        $uploadOk = 0;
    }
    
    if ($fileType != 'jpg' && $fileType != 'png' && $fileType != 'gif') {
        print('Разрешены только файлы JPG, PNG и GIF.<br>');
        $uploadOk = 0;
    }
    
    if ($uploadOk == 0) {
        print('Файл не был загружен.<br>');
    } else {
        if (move_uploaded_file($_FILES['file']['tmp_name'], $target_file)) {
            print('Файл ' . basename($_FILES['file']['name']) . ' был успешно загружен.<br>');
        } else {
            print('Ошибка при загрузке файла.<br>');
        }
    }
} else {
    print('Ошибка: файл не был загружен.<br>');
}