<?php

namespace Tests\Feature;

use App\Models\Comment;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class CommentTest extends TestCase
{
    use RefreshDatabase;
    /**
     * A basic feature test example.
     */
    public function testCreateComment()
    {
        $comment = new Comment();
        $comment->email = "gleam@aja.com";
        $comment->title = "Sample Title";
        $comment->comment = "Sample Comment";

        $comment->save();

        self::assertNotNull($comment->id);

    }

    public function testDefaultAttributeValues()
    {
        $comment = new Comment();
        $comment->email = "gleam@aja.com";

        $comment->save();

        self::assertNotNull($comment->id);
        self::assertNotNull($comment->title);
        self::assertNotNull($comment->comment);
    }
}
