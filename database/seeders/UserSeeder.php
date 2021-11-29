<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\models\User;

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
            'name' => 'Lautaro Rodriguez',
            'email' => 'lautarodriguez17@gmail.com',
            'password' => bcrypt('12345678')
        ])->assignRole('Admin');

        User::create([
            'name' => 'Martina',
            'email' => 'martu@gmail.com',
            'password' => bcrypt('12345678')
        ])->assignRole('Administrativo');

        User::factory(9)->create();
    }
}
