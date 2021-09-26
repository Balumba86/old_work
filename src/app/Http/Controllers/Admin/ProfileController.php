<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class ProfileController extends Controller
{
    public function profile()
    {
        return view('admin.profile');
    }

    public function update(Request $request)
    {
        $data = $request->all();
        $user = auth()->user();

        $new_pass = $data['new_password'];
        $new_pass_repeat = $data['new_password_repeat'];
        $crypt_new_pass = null;

        if ($new_pass) {
            if (strlen($new_pass) < 8) {
                return back()->with('error', 'Длина пароля должна быть более семи знаков!');
            }
            if ($new_pass !== $new_pass_repeat) {
                return back()->with('error', 'Вы ввели неверный проверочный пароль!');
            }
            $crypt_new_pass = Hash::make($new_pass);
        }

        $editable_user = User::where('id', $user->id)->get()->first();

        $new_data = [
            'name' => $data['name'],
            'email' => $data['email']
        ];

        if ($crypt_new_pass) {
            $new_data['password'] = $crypt_new_pass;
        }

        $editable_user->update($new_data);

        return redirect()->route('admin-profile');
    }
}
