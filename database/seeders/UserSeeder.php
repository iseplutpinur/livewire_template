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
        $admin = User::create([
            'name' => 'Administrator',
            'email' => 'administrator@gmail.com',
            'password' => bcrypt('@Cimahi123'),
        ]);

        $admin->assignRole('admin');
    }
}
