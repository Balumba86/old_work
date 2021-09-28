<?php

namespace App\Jobs;

use App\Mail\MailSender;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldBeUnique;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Mail;

class SendEmail implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    protected $mail_subject;
    protected $mail_text;
    protected $mail_to;
    protected $user_token;

    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct($to, $token, $subject, $data)
    {
        $this->mail_to = $to;
        $this->mail_subject = $subject;
        $this->mail_text = $data;
        $this->user_token = $token;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        Mail::to($this->mail_to)->send(new MailSender($this->mail_subject, $this->mail_text, $this->user_token));
    }
}
