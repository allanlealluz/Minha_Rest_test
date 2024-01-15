<?php
define('DS', __DIR__);
define('DIR_APP', DIRECTORY_SEPARATOR);

spl_autoload_register(function ($class) {
    $file = DS .'\Classes' . DIR_APP . str_replace('\\', DIRECTORY_SEPARATOR, $class) . '.php';
    echo $file;
    if (file_exists($file)) {
        include $file;
        echo "<break>\n foi";
    } else {
        echo "Class file not found: $file";
    }
});