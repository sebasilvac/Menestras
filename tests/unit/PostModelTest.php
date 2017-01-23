<?php

use App\Post;

class PostModelTest extends TestCase
{
    function test_slug_generado_del_titulo()
    {
        $post = new Post([
            'title' => 'Como instalar laravel'
        ]);

        $this->assertSame('como-instalar-laravel', $post->slug);
    }

    function test_editar_titulo_para_cambiar_slug()
    {
        $post = new Post([
            'title' => 'Como instalar laravel'
        ]);

        $post->title = 'Como instalar laravel 5.1 LTS';

        $this->assertSame('como-instalar-laravel-51-lts', $post->slug);
    }
}
