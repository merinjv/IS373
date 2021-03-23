<?php

namespace Tests\Feature;

use App\Models\User;
use App\Models\Post;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class RetrieveTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function retrieveName()
    {
        $post = Post::factory()->create();
        $post->title = "Hello";
        $post -> save;
        //$user = User::where('name','Caitlyn Koss')->get();
        dd($post);
    }
}
