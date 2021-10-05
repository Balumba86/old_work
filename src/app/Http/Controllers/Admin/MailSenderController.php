<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Services\EmailService;
use App\Services\MailSenderService;
use Illuminate\Http\Request;

class MailSenderController extends Controller
{
    private $mailSenderService;
    private $emailService;

    public function __construct(
        MailSenderService $mailSenderService,
        EmailService $emailService
    )
    {
        $this->mailSenderService = $mailSenderService;
        $this->emailService = $emailService;
    }

    public function index()
    {
        $list = $this->mailSenderService->listPaginate();

        $process = $this->mailSenderService->lastProcess();

        return view('admin.mail-senders.index', [
            'senders' => $list,
            'process' => $process,
            'can_create' => $process === 0
        ]);
    }

    public function add()
    {
        return view('admin.mail-senders.add');
    }

    public function create(Request $request)
    {
        //$this->newsService->adminCreate($request);

        $subscribers = $this->emailService->getAllSubscribers();

        $result = $this->mailSenderService->createSender($request, $subscribers);

        if (!$result) {
            return back()->with('error','Что-то пошло не так при отправке писем! Обратитесь к системному администратору.');
        }

        return redirect()->route('admin-email-sender');
    }

    public function view(int $id)
    {
        return view('admin.mail-senders.show', [
            'sender' => $this->mailSenderService->getById($id)
        ]);
    }
}
