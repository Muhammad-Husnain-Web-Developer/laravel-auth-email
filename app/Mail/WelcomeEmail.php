<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use App\Models\User;

class WelcomeEmail extends Mailable
{
    use Queueable, SerializesModels;

    public function __construct(public User $user)
    {
    
    }

    public function build()
    {
        return $this->subject('Welcome to Our App!')
                    ->view('emails.welcome');
    }
}
