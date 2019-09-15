<?php

namespace App;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class SendMailable extends Mailable
{
    use Queueable, SerializesModels;
    public $name;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($data)
    {		
		$this->view('emailneworder')->subject('تأكيد الطلب من هدايا')->with('data', $data);
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {			
		//dd($this->firstname);
        //return $this->view('name')->with('data', $data);
    }
}