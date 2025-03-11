<?php 
$date = date('Y-m-d');
$structure = "./copy$date";
mkdir($structure,  0777);
$dir = scandir('./');
foreach ($dir as $file) {
    copy($file,"$structure/$file");

}