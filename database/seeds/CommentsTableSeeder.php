<?php

use Illuminate\Database\Seeder;
use App\Comment;

class CommentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('comments')->delete();

        Comment::create(array(
            'user_id' => 2,
            'user_name' => 'The_Engine',
            'review_id' => 1,
            'body' => 'I agree!!'
        ));
    }
}