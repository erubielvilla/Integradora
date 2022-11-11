<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'Javier',
            'email' => 'javier.172@gmail.com',
            'password' => bcrypt('1234567890')
        ])->assignRole('Admin');

    }
}
