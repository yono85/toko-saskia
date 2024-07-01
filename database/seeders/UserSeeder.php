<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User as tblUsers;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $user = new tblUsers;
        $user->level = 2;
        $user->name = "Users";
        $user->email = "u@g.com";
        $user->password = Hash::make('123456');
        $user->save();
        // tblUsers::create([
        //     'level' =>  2,
        //     'name' => 'John doe',
        //     'email' => 'john@gmail.com',
        //     'password' => Hash::make('john@123')
        // ]);
    }
}
