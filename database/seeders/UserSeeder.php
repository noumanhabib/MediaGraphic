<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Schema;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Schema::disableForeignKeyConstraints();
        User::truncate();
        Schema::enableForeignKeyConstraints();
        $user = User::create([
            'first_name' => 'Site',
            'last_name' => 'Admin',
            'title' => User::USER_TITLE_MR,
            'customer_type' => null,
            'email' => 'admin@gmail.com',
            'phone' => '0123456789',
            'password' => Hash::make("password"),
        ]);
        $user->role = User::USER_ROLE_ADMIN;
        $user->email_verified_at = now();
        $user->save();
    }
}
