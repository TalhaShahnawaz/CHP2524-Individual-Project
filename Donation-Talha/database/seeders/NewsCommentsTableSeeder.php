<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class NewsCommentsTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('news_comments')->insert([
            [
                'comment' => 'This is a great article!',
                'name' => 'John Doe',
                'email' => 'john.doe@example.com',
                'website' => 'http://johndoe.com',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'comment' => 'Thanks for sharing!',
                'name' => 'Jane Doe',
                'email' => 'jane.doe@example.com',
                'website' => 'http://janedoe.com',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'comment' => 'I have a question about this topic.',
                'name' => 'Bob Smith',
                'email' => 'bob.smith@example.com',
                'website' => 'http://bobsmith.com',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
