<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $admin = User::create([
            'name' => 'Admin',
            'email' =>  'admin@nonton.test',
            'password' => bcrypt('admin123')
        ]);
        $admin->assignRole('admin');
    }
}
