<?php

namespace Nice\Module;

/**
 * ModuleFactory
 *
 * @author markov
 */
class ModuleFactory
{
    /**
     * Make module
     * 
     * @param string $name class name
     * @return \Nice\Module\Module
     */
    public function make($name) 
    {
        $className = $name . '\Module';
        return new $className;
    }
}
