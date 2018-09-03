<?php

use Pimple\Container as PimpleContainer;

class CI_Container
{
    protected $container;

    /**
     * @return PimpleContainer
     */
    public function getContainer()
    {
        return $this->container;
    }

    public function __construct()
    {
        $this->container = new PimpleContainer([
            'speaker' => App\libraries\Speaker\HelloSpeaker::class
        ]);
    }
}