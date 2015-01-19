<?php

namespace Nice;

/**
 * Application
 *
 * @author markov
 */
class Application
{
    /**
     * @var array config 
     */
    protected $config = [];
    
    /**
     * Init
     */
    public static function init() 
    {
        $config = require '../Config/Application.config.php';
    }
}
