<?php 
$filename = 'text.txt';
$newname =  'text0.txt';
if (file_exists($newname)) {
    print("СУЩЕСТВУЕТ");
} else {
    rename($filename, $newname);
}