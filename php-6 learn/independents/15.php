<?php 
$word = 'Lorem';
$file = 'example.txt';
$newlime = file_get_contents($file);
$newlime = str_replace($word,"replaceword", $newlime);
file_put_contents($file, $newlime);