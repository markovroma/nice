<?php

// Composer autoloading
if (file_exists('vendor/autoload.php')) {
    $loader = include 'vendor/autoload.php';
}
$nicePath = 'vendor';
if (isset($loader)) {
    $loader->add('Nice', $nicePath);
} else {
    include $nicePath . '/Nice/Loader/Autoloader.php';
    Nice\Loader\Autoloader::run();
}