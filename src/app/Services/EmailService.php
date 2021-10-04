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
}
