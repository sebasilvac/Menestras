<?php

use App\Post;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class PostIntegrationTest extends TestCase
{

    use DatabaseTransactions;

    function test_slug_y_registro_en_la_base_de_datos()
    {

        $post = $this->createPost([
            'title' => 'Como instalar laravel',
            'content'=> 'contenido'
        ]);

        // modo 1
        $this->assertSame(
            'como-instalar-laravel',
            $post->fresh()->slug
        );

        /*
        // modo 2
        $this->seeInDatabase('posts', [
            'slug' => 'como-instalar-laravel'
        ]);

        // modo 3
        $this->assertSame(
            'como-instalar-laravel',
            $post->slug
        );
        */
    }
}
