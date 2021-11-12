<?php

use App\Models\Comment;

class ExampleTest extends TestCase
{
    public function testCount()
    {
        $commentCount = Comment::where([
            ['user_id', '=', 1],
            ['text', 'LIKE', 'This is comment number 999%']
        ])->count();

        $this->get('/users')
            ->seeJsonEquals([
                'count_without_get' => $commentCount,
                'count_with_get' => $commentCount
            ]);
    }
}
