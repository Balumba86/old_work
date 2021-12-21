<?php

namespace App\Jobs;

use App\Mail\RentRequest;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldBeUnique;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Mail;

class RentRequestInform implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    protected $mail_subject;
    protected $mail_to;
    protected $client_name;
    protected $client_email;
    protected $client_phone;
    protected $client_comment;

    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct($to, $name, $email, $phone, $comment = '')
    {
        $this->mail_to = $to;
        $this->mail_subject = 'Заявка на аренду';
        $this->client_name = $name;
        $this->client_email = $email;
        $this->client_phone = $phone;
        $this->client_comment = $comment;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        Mail::to($this->mail_to)->send(new RentRequest($this->mail_subject, $this->client_name, $this->client_email, $this->client_phone, $this->client_comment));
    }
}
