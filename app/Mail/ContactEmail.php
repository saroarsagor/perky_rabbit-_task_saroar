<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class ContactEmail extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * The data instance.
     *
     * @var Data
     */
    public $name;
    public $msg;
    public $sub;
    public $email;
    public $num;


    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($name,$message,$subject,$email,$number)
    {
        $this->name = $name;
        $this->msg = $message;
        $this->sub = $subject;
        $this->email = $email;
        $this->num = $number;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        $e_name = $this->name;
        $e_msg = $this->msg;
        $e_sub = $this->sub;
        $e_email = $this->email;
        $e_num = $this->num;

        return $this->view('email.email',compact('e_msg','e_name','e_email','e_num'))->subject($e_sub);
    }
}
