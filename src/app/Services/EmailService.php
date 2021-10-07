<?php

namespace App\Services;

use App\Models\Subscribe;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class EmailService
{
    public function subscribeEmail(Request $request)
    {
        $data = $request->all();

        $subscriber = Subscribe::where('email', $data['email'])->get()->first();

        $data['active'] = true;
        $data['token'] = Hash::make($data['email']);

        if ($subscriber) {
            return $subscriber->update($data);
        }

        return Subscribe::create($data);
    }

    public function getAllSubscribers(): array
    {
        $subscribers = Subscribe::where('active', true)->get();

        return $subscribers->toArray();
    }

    public function getSubscriberByToken(?string $token)
    {
        $subscriber = Subscribe::where('token', $token)->get()->first();

        return $subscriber;
    }

    public function unsubscribeByToken(?string $token)
    {
        $subscriber = Subscribe::where('token', $token)->get()->first();

        if ($subscriber) {
            $subscriber->update([
                "active" => false
            ]);
        }
    }

    public function getSubscribersLastWeek()
    {
        return [
            Subscribe::whereDate('created_at', date("Y-m-d", strtotime("-6 day")))->get()->count(),
            Subscribe::whereDate('created_at', date("Y-m-d", strtotime("-5 day")))->get()->count(),
            Subscribe::whereDate('created_at', date("Y-m-d", strtotime("-4 day")))->get()->count(),
            Subscribe::whereDate('created_at', date("Y-m-d", strtotime("-3 day")))->get()->count(),
            Subscribe::whereDate('created_at', date("Y-m-d", strtotime("-2 day")))->get()->count(),
            Subscribe::whereDate('created_at', date("Y-m-d", strtotime("-1 day")))->get()->count(),
            Subscribe::whereDate('created_at', date("Y-m-d", strtotime("now")))->get()->count()
        ];
    }

    public function getUnsubscribersLastWeek()
    {
        return [
            Subscribe::where('active', false)->whereDate('updated_at', date("Y-m-d", strtotime("-6 day")))->get()->count(),
            Subscribe::where('active', false)->whereDate('updated_at', date("Y-m-d", strtotime("-5 day")))->get()->count(),
            Subscribe::where('active', false)->whereDate('updated_at', date("Y-m-d", strtotime("-4 day")))->get()->count(),
            Subscribe::where('active', false)->whereDate('updated_at', date("Y-m-d", strtotime("-3 day")))->get()->count(),
            Subscribe::where('active', false)->whereDate('updated_at', date("Y-m-d", strtotime("-2 day")))->get()->count(),
            Subscribe::where('active', false)->whereDate('updated_at', date("Y-m-d", strtotime("-1 day")))->get()->count(),
            Subscribe::where('active', false)->whereDate('updated_at', date("Y-m-d", strtotime("now")))->get()->count()
        ];
    }
}
