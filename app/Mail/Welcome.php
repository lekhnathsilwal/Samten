<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use App\User;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class Welcome extends Mailable
{
    use Queueable, SerializesModels;
    public $admin;
    public $password;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(User $admin,$password)
    {
        $this->admin=$admin;
        $this->password=$password;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->markdown('emails.welcome');
    }
}
