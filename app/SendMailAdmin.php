<?php

namespace App;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class SendMailAdmin extends Mailable
{
    use Queueable, SerializesModels;
    public $name;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($orderdata)
    {		
		return $this->view('adminemailorder')->subject('Ribbon8 New Order')->with('orderdata', $orderdata);
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