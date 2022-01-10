<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue; 

class sendEmailPass extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
   
    public $Pass_Member_Id;
    public function __construct($Pass_Member_Id)
    {
        $this->Pass_Member_Id=$Pass_Member_Id;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        $Pass_MemberId= $this->Pass_Member_Id;
        return $this->view('email.PasswordChnage',compact('Pass_MemberId'));
    }
}
