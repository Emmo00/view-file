<?php

$filename = filter_input(INPUT_POST, 'filename', FILTER_SANITIZE_STRING);
$_SESSION['filename'] = $filename;

if (empty($filename) ?? $filename == '') {
    $ERROR = "Filename must be provided";
    include 'get.php';
    die();
}

if (!file_exists($filename)) {
    $ERROR = 'File path does not exist';
    include 'get.php';
    die();
}

if (!is_readable($filename)) {
    $ERROR = 'File is not readable';
    include 'get.php';
    die();
}

$file = fopen($filename, 'r');

$file_size = filesize($filename);

$file_content = fread($file, $file_size);

if ($file_size > 1024 ** 3) {
    $file_size = $file_size / 1024 ** 3 . 'MB';
} else if ($file_size > 1024 ** 2) {
    $file_size = $file_size / 1024 ** 2 . "KB";
} else {
    $file_size = $file_size . 'KB';
}


include 'file_content.php';

fclose($file);
