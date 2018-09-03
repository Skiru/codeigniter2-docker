<?php

namespace App\libraries\Speaker;

use App\libraries\Speaker\Interfaces\SpeakerInterface;

class GoodbyeSpeaker implements SpeakerInterface
{
    public function say()
    {
        return 'goodbye!';
    }
}