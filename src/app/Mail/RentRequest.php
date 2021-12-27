<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class RentRequest extends Mailable
{
    use Queueable, SerializesModels;
    protected $mail_subject;
    protected $client_name;
    protected $client_email;
    protected $client_phone;
    protected $client_comment;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($subject, $name, $email, $phone, $comment)
    {
        $this->mail_subject = $subject;
        $this->client_name = $name;
        $this->client_email = $email;
        $this->client_phone = $phone;
        $this->client_comment = $comment;
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
            ->view('mail.rent_request', [
                "client_name" => $this->client_name,
                "client_email" => $this->client_email,
                "client_phone" => $this->client_phone,
                "client_comment" => $this->client_comment
            ]);
    }
}
