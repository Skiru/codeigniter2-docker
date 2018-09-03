<?php

use App\libraries\Speaker\GoodbyeSpeaker;
use App\libraries\Speaker\HelloSpeaker;
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
            HelloSpeaker::class => new HelloSpeaker(),
            GoodbyeSpeaker::class => new GoodbyeSpeaker()
        ]);
    }
}