<?php

namespace Nice\Loader;

/**
 * Autoloader
 *
 * @author markov
 */
class Autoloader
{
    /**
     * Run autoloader
     */
    public static function run() 
    {
        spl_autoload_register(function($className) {
            $path = '../vendor/' . str_replace("\\", "/", $className) . '.php';
            if (!file_exists($path)) {
                return false;
            }
            require '../vendor/' . str_replace("\\", "/", $className) . '.php';
        });
    }
}
