<?php
$filename = 'text1.txt';

if (file_exists($filename)) {
    unlink($filename);
} else {
   print("НЕ СУЩЕСТВУЕТ");
}