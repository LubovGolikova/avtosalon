<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;
use App\SignUp;
class OrderShipped extends Mailable
{
    use Queueable, SerializesModels;
    public $signup;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(SignUp $signup)
    {
        $this->signup = $signup;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->from('example@example.com')
            ->view('emailAdmin');
    }
}
