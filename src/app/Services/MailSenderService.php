<?php

namespace App\Services;

use App\Jobs\SendEmail;
use App\Models\MailSender;
use Illuminate\Http\Request;

class MailSenderService
{
    public function listPaginate()
    {
        return MailSender::orderBy('id', 'desc')->paginate(10);
    }

    public function createSender(Request $request,array $subscribers)
    {
        $data = $request->all();

        $result = MailSender::create([
            "subject" => $data['subject'],
            "text" => $data['text']
        ]);

        if ($result) {
            foreach ($subscribers as $subscriber) {
                dispatch(new SendEmail($subscriber['email'], $subscriber['token'], $data['subject'], $data['text']));
            }

            return true;
        }

        return false;
    }

    public function getById(int $id)
    {
        return MailSender::where('id', $id)->get()->first();
    }
}
