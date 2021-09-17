<?php

namespace App\Services;

use App\Models\RentRequest;
use Illuminate\Http\Request;

class RentRequestService
{

    public function adminIndex(Request $request)
    {
        $rents = RentRequest::query();

        $name = $request->get('name');
        if (!is_null($name)) {
            $name = trim($name);
            $rents->where('name', 'like', "%$name%");
        }

        $email = $request->get('email');
        if (!is_null($email)) {
            $email = trim($email);
            $rents->where('email', 'like', "%$email%");
        }

        $phone = $request->get('phone');
        if (!is_null($phone)) {
            $phone = trim($phone);
            $rents->where('phone', 'like', "%$phone%");
        }

        $rents = $rents->orderBy('is_new', 'desc')->paginate(10);

        return $rents;
    }

    public function adminGetById(int $id)
    {
        return RentRequest::where('id', $id)->first();
    }

    public function adminUpdate(int $id)
    {
        $request = RentRequest::where('id', $id)->first();

        $data = [
            "is_new" => false
        ];

        return $request->update($data);
    }

    public function adminDelete(int $id)
    {
        $rent = RentRequest::where('id', $id)->first();

        return $rent->delete();
    }

    public function adminCount():int
    {
        return RentRequest::where('is_new', true)->get()->count();
    }
}
