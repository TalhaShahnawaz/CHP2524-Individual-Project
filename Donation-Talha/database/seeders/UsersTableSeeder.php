<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
class UsersTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('users')->insert([
            [
                'name' => 'John Doe',
                'role_id' => 'admin',
                'email' => 'john.doe@example.com',
                'email_verified_at' => now(),
                'password' => Hash::make('password'),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Jane Doe',
                'role_id' => 'Patient',
                'email' => 'jane.doe@example.com',
                'email_verified_at' => now(),
                'password' => Hash::make('password'),
                
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Bob Smith',
                'role_id' => 'donor',
                'email' => 'bob.smith@example.com',
                'email_verified_at' => now(),
                'password' => Hash::make('password'),
                
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
