<?php

if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class DiContainer
{
    /**
     * Dependency injection Pimple container
     */
    public $DI;

    public function initContainer()
    {
        $DI =& load_class('Container', 'libraries/Pimple');
    }
}