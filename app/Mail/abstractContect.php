<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue; 

class abstractContect extends Mailable
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
    public $abstract_title;
    public $abstract;
    public function __construct($name,$email,$number,$country,$abstract_title,$abstract)
    {
        $this->name=$name;
        $this->email=$email;
        $this->number=$number;
        $this->country=$country;
        $this->abstract_title=$abstract_title;
        $this->abstract=$abstract;
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
        $abstract_title_cnt= $this->abstract_title;
       $abstract_cnt = $this->abstract;
        return $this->view('AllMail.abstractEmail',compact('user_name','user_email','user_number','user_country','abstract_title_cnt','abstract_cnt'));
    }
}
