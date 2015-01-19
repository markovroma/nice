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
        return [
            'class' => get_class($this)
        ];
    }
}
