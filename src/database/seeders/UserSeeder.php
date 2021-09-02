<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $name = 'Admin';
        $email = 'balumba.ru@gmail.com';
        $pass = '20nikolskiy21';

        if (!User::where('email', $email)->first()) {
            $user1 = new User();
            $user1->name = $name;
            $user1->email = $email;
            $user1->email_verified_at = now();
            $user1->password = bcrypt($pass);
            $user1->save();
        }
    }
}
