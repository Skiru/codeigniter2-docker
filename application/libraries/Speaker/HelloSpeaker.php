<?php

namespace App\libraries\Speaker;

use App\libraries\Speaker\Interfaces\SpeakerInterface;

class HelloSpeaker implements SpeakerInterface
{
    public function say()
    {
        return 'hello!';
    }
}