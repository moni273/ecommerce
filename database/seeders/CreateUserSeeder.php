<?php

namespace Database\Seeders;

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
        $users =  [
            [
            'name' => 'simon', 
            'email' => 'simon@gmail.com',
            'password' => bcrypt('simon@123'),
            'role' => USER_ROLE,
            ],
            [
                'name' => 'john', 
                'email' => 'john@gmail.com',
                'password' => bcrypt('john@123'),
                'role' => USER_ROLE
            ]
        ];
        
        //Create the User in users table
         foreach ($users as $value) {
            User::create($value);
        }
    }
}
