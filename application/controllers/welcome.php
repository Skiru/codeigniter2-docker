<?php

use App\libraries\ControllerInjection\ControllerInjection;
use App\libraries\Speaker\GoodbyeSpeaker;
use App\libraries\Speaker\HelloSpeaker;

if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Welcome extends ControllerInjection
{
    /**
     * @var HelloSpeaker $helloer
     */
    private $helloer;

    /**
     * @var GoodbyeSpeaker $goodbye
     */
    private $goodbye;


    public function __construct($helloer = null, $goodbye = null)
    {
        parent::__construct([
            GoodbyeSpeaker::class => &$goodbye,
            HelloSpeaker::class => &$helloer
        ]);
        $this->goodbye = $goodbye;
        $this->helloer = $helloer;
    }

	public function index()
	{
	    $hello = $this->helloer->say();
	    $goodbye = $this->goodbye->say();
		$this->load->view('welcome_message',['message'=>$hello.' and '.$goodbye]);
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */