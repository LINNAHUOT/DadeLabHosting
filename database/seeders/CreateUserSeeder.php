<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\hash;
use Illuminate\Database\Seeder;
use App\Models\User;
class CreateUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = [
            [
               'name'=>'Admin',
               'email'=>'admin@test.com',
               'role' => 'admin', 
               'password'=>Hash::make('123456'),
            ],
            [
               'name'=>'Doctor Sam',
               'email'=>'sam@test.com',
               'role' => 'doctor',
               'password'=>Hash::make('123456'),
               
            ],
            
            [
                'name'=>'Sok San',
                'email'=>'sok@test.com',
                'role' => 'patient',
                'password'=>Hash::make('123456'),
        
             ],

        ];
        foreach ($users as $key => $value) {
            User::create($value);
        }
    }
}
