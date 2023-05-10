<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;


class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $user = [
            [
                'name' => 'Galih Nur Ikhsan',
                'email' => 'galihnurikhsan24@gmail.com',
                'password' => bcrypt('password'),
            ]
        ];
        foreach ($user as $key => $e) {
            User::create([
                'name' => $e['name'],
                'password' => $e['password'],
                'email' => $e['email']
            ]);
        }
    }
}
