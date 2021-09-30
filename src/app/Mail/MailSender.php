<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class MailSender extends Mailable
{
    use Queueable, SerializesModels;
    protected $mail_subject;
    protected $mail_text;
    protected $user_token;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($subject, $data, $token)
    {
        $this->mail_subject = $subject;
        $this->mail_text = $data;
        $this->user_token = $token;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->from(config('mail.from'))
            ->subject($this->mail_subject)
            ->view('mail.subscriber', [
                "mail_text" => $this->mail_text,
                "mail_token" => $this->user_token
            ]);
    }
}
