<?php

namespace App\libraries\ControllerInjection;

use CI_Controller;

class ControllerInjection extends CI_Controller
{
    public function __construct(array $classes)
    {
        parent::__construct();

        $container = $this->{'container'}->getContainer();
        foreach ($classes as $class => &$property) {
            $property = $container[$class];
        }
    }
}