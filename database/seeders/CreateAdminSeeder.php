<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

class CreateAdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = [
        	'name' => 'admin', 
        	'email' => 'admin@gmail.com',
        	'password' => bcrypt('123456'),
            'role' => ADMIN_ROLE
        ];

        //Create the AdminUser in User table
        User::create($user);
    }
}
