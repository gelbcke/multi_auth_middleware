<?php

namespace Database\Seeders;

use App\Models\User;
use Ramsey\Uuid\Uuid;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CreateUsersSeeder extends Seeder
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
                'id' => Uuid::uuid4()->toString(),
                'name' => 'Admin User',
                'email' => 'admin@test.com',
                'type' => 3,
                'password' => bcrypt('secret'),
            ],
            [
                'id' => Uuid::uuid4()->toString(),
                'name' => 'Manager User',
                'email' => 'manager@test.com',
                'type' => 2,
                'password' => bcrypt('secret'),
            ],
            [
                'id' => Uuid::uuid4()->toString(),
                'name' => 'User',
                'email' => 'user@test.com',
                'type' => 1,
                'password' => bcrypt('secret'),
            ],
            [
                'id' => Uuid::uuid4()->toString(),
                'name' => 'Client',
                'email' => 'client@test.com',
                'type' => 0,
                'password' => bcrypt('secret'),
            ],
        ];

        foreach ($users as $key => $user) {
            User::create($user);
        }
    }
}