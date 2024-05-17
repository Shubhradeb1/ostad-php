<?php
spl_autoload_register(function ($class_name) {
    $file_path = "C:\Users\Shovon\OneDrive\Desktop\Php" . $class_name . ".php";
    if (file_exists($file_path)) {
        include $file_path;
    } else {
        echo "Class not found: $class_name\n";
    }
});

$e = new oop();