<?php

namespace Nice\Module;

/**
 * Module
 *
 * @author markov
 */
abstract class Module
{
    /**
     * @return array
     */
    public function getAutoloaderConfig()
    {
        $class = new \ReflectionClass(get_class($this));
        return [
            'namespace' => $class->getNamespaceName()
        ];
    }
}
