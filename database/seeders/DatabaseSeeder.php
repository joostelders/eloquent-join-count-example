<?php

namespace Database\Seeders;

use App\Models\Comment;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::insert([
            'name' => 'Test User'
        ]);

        $commments = [];

        for ($i = 0; $i < 10000; $i++) {
           $commments[] = [
               'text' => "This is comment number $i",
               'user_id' => 1
           ];
        }

        Comment::insert($commments);
    }
}
