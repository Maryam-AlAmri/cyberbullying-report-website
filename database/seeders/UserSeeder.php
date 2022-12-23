<?php

namespace Database\Seeders;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
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
        $users_types = ['admin', 'institution','consultant','victim'];


        
        foreach ($users_types as $key => $userType) {
            # code...
            $user = new User;
            $user->name = $users_types[$key];
            $user->email = $users_types[$key] . "@test.com";
            $user->type = $users_types[$key];
            $user->password = Hash::make('password'); 
            $user->save();
        }
    }
}
