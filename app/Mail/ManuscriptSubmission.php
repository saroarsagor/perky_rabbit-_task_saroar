<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue; 

class ManuscriptSubmission extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
   
    public $name;
    public $email;
    public $number;
    public $country;
    public $manuscript_title;
    public $manuscript;
    public function __construct($name,$email,$number,$country,$manuscript_title,$manuscript)
    {
        $this->name=$name;
        $this->email=$email;
        $this->number=$number;
        $this->country=$country;
        $this->manuscript_title=$manuscript_title;
        $this->manuscript=$manuscript;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        $user_name = $this->name;
        $user_email = $this->email;
        $user_number = $this->number;
        $user_country = $this->country;
        $manuscript_title_cnt= $this->manuscript_title;
       $manuscript_cnt = $this->manuscript;
        return $this->view('AllMail.ManuscriptEmail',compact('user_name','user_email','user_number','user_country','manuscript_title_cnt','manuscript_cnt'));
    }
}
