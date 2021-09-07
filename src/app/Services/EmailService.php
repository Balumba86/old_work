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
}
