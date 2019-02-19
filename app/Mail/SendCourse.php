<?php

namespace App\Mail;
use App\Enlist;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class SendCourse extends Mailable
{
    use Queueable, SerializesModels;
    public $name;
    public $programChoice;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($name, $programChoice)
    {
        $this->name = $name;
        $this->programChoice = $programChoice;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('emails.enlist');
    }
}
