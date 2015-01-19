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
            require '../vendor/' . str_replace("\\", "/", $className) . '.php';
        });
    }
}
