<?php 
    $filename = 'text.txt';
    $copyfile = 'text1.txt';
    if (file_exists($copyfile)) {
        print("NO");
    } else {
        copy($filename, $copyfile);
    }