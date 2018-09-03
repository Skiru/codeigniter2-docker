<?php

if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class DiContainer
{
    public $DI;

    public function initContainer()
    {
        $DI =& load_class('Container', 'libraries/Pimple');
    }
}