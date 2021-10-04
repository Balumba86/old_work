<?php

namespace App\Http\Controllers\Email;

use App\Http\Controllers\Controller;
use App\Services\EmailService;
use Illuminate\Http\Request;

class UnsubscribeController extends Controller
{
    private $emailService;

    public function __construct(
        EmailService $emailService
    )
    {
        $this->emailService = $emailService;
    }

    public function checkEmail(Request $request)
    {
        $token = $request->get('uns_token');
        $subscriber = $this->emailService->getSubscriberByToken($token);

        return view('guest.unsubscribe', [
            "subscriber" => $subscriber,
            "result" => false
        ]);
    }

    public function submit(Request $request)
    {
        $data = $request->all();

        $this->emailService->unsubscribeByToken($data['token']);

        return view('guest.unsubscribe', [
            "subscriber" => null,
            "result" => true
        ]);
    }
}
