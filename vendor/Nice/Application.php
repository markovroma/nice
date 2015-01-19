<?php

namespace Nice;

use Nice\Module\ModuleFactory;

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
        foreach ($config['modules'] as $moduleName) {
            require '../Module/' . $moduleName . '/Module.php';
            $module = ModuleFactory::make($moduleName);
            var_dump($module->getAutoloaderConfig());
        }
    }
}
